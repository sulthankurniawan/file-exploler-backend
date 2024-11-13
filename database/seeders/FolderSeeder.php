<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Folder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Root folders
        $root1 = Folder::create(['name' => 'Root Folder 1']);
        $root2 = Folder::create(['name' => 'Root Folder 2']);
        $root3 = Folder::create(['name' => 'Root Folder 3']);

        // Subfolders under Root Folder 1
        $sub1 = Folder::create(['name' => 'Subfolder 1.1', 'parent_id' => $root1->id]);
        $sub2 = Folder::create(['name' => 'Subfolder 1.2', 'parent_id' => $root1->id]);
        $sub3 = Folder::create(['name' => 'Subfolder 1.3', 'parent_id' => $root1->id]);

        // Subfolders under Subfolder 1.1
        Folder::create(['name' => 'Subfolder 1.1.1', 'parent_id' => $sub1->id]);
        Folder::create(['name' => 'Subfolder 1.1.2', 'parent_id' => $sub1->id]);

        // Subfolders under Subfolder 1.2
        $sub1_2_1 = Folder::create(['name' => 'Subfolder 1.2.1', 'parent_id' => $sub2->id]);
        Folder::create(['name' => 'Subfolder 1.2.2', 'parent_id' => $sub2->id]);

        // Subfolders under Subfolder 1.2.1
        Folder::create(['name' => 'Subfolder 1.2.1.1', 'parent_id' => $sub1_2_1->id]);
        Folder::create(['name' => 'Subfolder 1.2.1.2', 'parent_id' => $sub1_2_1->id]);

        // Subfolders under Subfolder 1.3
        Folder::create(['name' => 'Subfolder 1.3.1', 'parent_id' => $sub3->id]);
        Folder::create(['name' => 'Subfolder 1.3.2', 'parent_id' => $sub3->id]);

        // Subfolders under Root Folder 2
        $sub2_1 = Folder::create(['name' => 'Subfolder 2.1', 'parent_id' => $root2->id]);
        $sub2_2 = Folder::create(['name' => 'Subfolder 2.2', 'parent_id' => $root2->id]);

        // Subfolders under Subfolder 2.1
        Folder::create(['name' => 'Subfolder 2.1.1', 'parent_id' => $sub2_1->id]);
        Folder::create(['name' => 'Subfolder 2.1.2', 'parent_id' => $sub2_1->id]);

        // Subfolders under Subfolder 2.2
        Folder::create(['name' => 'Subfolder 2.2.1', 'parent_id' => $sub2_2->id]);

        // Subfolders under Root Folder 3
        $sub3_1 = Folder::create(['name' => 'Subfolder 3.1', 'parent_id' => $root3->id]);
        $sub3_2 = Folder::create(['name' => 'Subfolder 3.2', 'parent_id' => $root3->id]);

        // Subfolders under Subfolder 3.1
        Folder::create(['name' => 'Subfolder 3.1.1', 'parent_id' => $sub3_1->id]);
        Folder::create(['name' => 'Subfolder 3.1.2', 'parent_id' => $sub3_1->id]);

        // Subfolders under Subfolder 3.2
        Folder::create(['name' => 'Subfolder 3.2.1', 'parent_id' => $sub3_2->id]);
        Folder::create(['name' => 'Subfolder 3.2.2', 'parent_id' => $sub3_2->id]);
    }
}
