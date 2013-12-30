<?php

/**
 * Check the database has been created and
 * contains the necessary tables and columns.
 *
 * If the tests fail, run `php artisan migrate`
 * 
 * @see https://wiki.openrightsgroup.org/wiki/Censorship_Monitoring_Project_API
 * @author Liam Anderson <liamja@fastmail.fm>
 */

class DatabaseTest extends TestCase {

    /**
     * Check the users table exists.
     * 
     * @author Liam Anderson <liamja@fastmail.fm>
     * 
     * @return void
     */
    public function testUserTableExists()
    {
        $this->assertTrue( Schema::hasTable('users') );
    }

    /**
     * Check the probes table exists.
     * 
     * @author Liam Anderson <liamja@fastmail.fm>
     * 
     * @return void
     */
    public function testProbesTableExists()
    {
        $this->assertTrue( Schema::hasTable('probes') );
    }

    /**
     * Check the tempURLs table exists.
     * 
     * @author Liam Anderson <liamja@fastmail.fm>
     * 
     * @return void
     */
    public function testTempURLsTableExists()
    {
        $this->assertTrue( Schema::hasTable('tempURLs') );
    }

}