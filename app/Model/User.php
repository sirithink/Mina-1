<?php
	class User extends AppModel{
		public $name = 'User';
		public $validate = array(
				'name' => array(
						'Please enter your name' => array(
							'rule' => 'notEmpty',
							'message' => 'Please enter your name!'	
							)
					),
				'password' => array(
						'Not empty' => array(
								'rule' => 'notEmpty',
								'message' => 'pleae enter the password.'
								),
						'Match passwords' => array(
								'rule' => 'matchPasswords',
								'message' => 'Your passwords do not match!'
								)
						),
				'password_confirmation' => array(
						'Not empty' => array(
								'rule' => 'notEmpty',
								'message' => 'pleae confirm your password.'
						)
					)	
			);
		
		/**
		 * This method uses to fetch all info including group names
		 */
		
		public function change_password($user_id = NULL, $new_password = NULL){
			$result = false;
			if ($user_id){
				$this->id = $user_id;
				if ($this->exists() && strlen($new_password)>0) {
					$result = $this->saveField( 'password', $new_password );
				}
			}
			return $result;
		}
		
		
		/**
		 * Used when admin wants to change the password
		 * @param String $data
		 */
		public function matchPasswords( $data ){
			if ($data['password'] == $this->data['User']['password_confirmation']) {
				return true;
			}else{
				$this->invalidate('password_confirmation','Your passwords do not match!');//ËøôÂè•ÁöÑÊÑèÊÄùÊòØÔºåÁî±‰∫éÂ∑≤ÁªèÁü•ÈÅì2‰∏™ÂØÜÁ†Å‰∏çmatchÔºåÊâÄ‰ª•Âú®password_confirmationÁöÑÈ™åËØÅ‰πüÂêåÊó∂Â§±Ë¥•Âπ∂ÊòæÁ§∫ÈîôËØØÊèêÁ§∫Ê∂àÊÅØ
				return false;
			}
		}
		
		public function beforeSave(){
			if ( isset($this->data['User']['password']) ) {
				$this->data['User']['password'] = AuthComponent::password( $this->data['User']['password'] );
			}
			return true;
		}
		
	}
