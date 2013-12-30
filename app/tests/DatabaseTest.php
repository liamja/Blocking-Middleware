<?php

/**
 * Check the database has been created and
 * contains the necessary tables and columns.
 *
 * If the tests fail, run `php artisan migrate`
 * 
 * @see https://github.com/openrightsgroup/Blocking-Middleware/blob/master/mysql/structure.sql
 */

class DatabaseTest extends TestCase {

    /**
     * Check the users table exists.
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
     * @return void
     */
    public function testProbesTableExists()
    {
        $this->assertTrue( Schema::hasTable('probes') );
    }

    /**
     * Check the tempURLs table exists.
     * 
     * @return void
     */
    public function testTempURLsTableExists()
    {
        $this->assertTrue( Schema::hasTable('tempURLs') );
    }

}