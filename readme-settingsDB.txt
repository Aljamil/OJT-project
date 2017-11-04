1. Under "user" table
	- add "UserLevel" attribute. Set as varchar
	- add master admin having "admin" as username & user level
	
2. Under "user_access" table
	- for "admin" username, set to '1' all the remaining attributes.
	
3. Under "setting" table
	- add one row with/without values for all the fields. Set ID to '1'
	- add "IsHalfDay" as enum

4. Under "setting_schedule"
	- add one row with/without values for all the fields. Set ID to '1'
	
5. Under "schedule" table
	- 	Name: ID
		Type: Int
		Length: 10
		Attributes: Unsigned
		Index: Primary
		Auto-increment: True
		
		ALTER TABLE `schedule` DROP PRIMARY KEY