---
{"category_name":"medium","problem_code":"HOB2","problem_name":"Hotel Balifornia 2","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"CPP14","3":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"14-02-2013","tags":{"0":"anton_lunyov","1":"cook31","2":"easy","3":"greedy"},"editorial_url":"http://discuss.codechef.com/problems/HOB2","time":{"view_start_date":1361126701,"submit_start_date":1361126701,"visible_start_date":1361126539,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>I hope all of you remember that Chef built a Hotel Balifornia in Byteland and some complicated scheme for allocating guests, invented by lift boy, was used. But after realizing all badness of this scheme Chef fired lift boy and simplifies the process of allocating guests drastically. Now at the time of check-in each guest only provides the preferable room for him and the number of minutes he will stay in the hotel. After that the hotel manager finds the first available room starting from the provided one assuming that rooms in the hotel are arranged in cyclic manner.</p>
<p>Namely, let there be <b>R</b> rooms in the hotel and they are numbered by numbers from <b>0</b> to <b>R − 1</b>, inclusive. Suppose guest chooses the room <b>K</b>. Then the hotel manager checks rooms in order<br/><b>K, K + 1, K + 2, ..., R − 2, R − 1, 0, 1, 2, ..., K − 2, K − 1</b><br/> and allocates the guest in the first free room in this list or report the guest that all rooms are occupied if this is the case.</br/></br/></p>
<p>Chef has a logbook where hotel manager writes down information about each guest. Namely, he records the visit time, the preferable room for the guest (NOT the actual room where guest will live), the staying time and the inconvenience caused to the guest, which equals to the number of occupied rooms that hotel manager checks in the list above before allocating the guest (or <b>R</b> if all rooms are occupied). The visit time is provided in minutes after the moment when hotel was opened for visits. Before the first visit all rooms in the hotel were free. When guest leaves the room it could be occupied at the same moment of time by another guest if exactly at this moment the visit occurs.</p>
<p>But lift boy prepared the revenge to the Chef. Just before the inspection of the hotel he has erased the second and the third entry of each visit in the logbook (that is, the preferable room and staying time for each guest). Chef needs to recover the damage quickly since only a few hours left before inspector visit. He knows about your advanced skills in programming and asks you for help. He will be satisfied by any consistent recover of the data. That is, if inspector will reproduce the process of allocating guests using the visit time, the preferable room and the staying time for each guest, he will obtain the correct value of the inconvenience caused to each guest.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains two space-separated integers <b>R</b> and <b>N</b>, denoting the number of rooms and the number of visits respectively. The description of <b>N</b> damaged records in logbook follows. Namely, each of the following <b>N</b> lines contains 2 space separated integers <b>time</b> and <b>inconv</b>, denoting the time of the visit and inconvenience caused to the guest.</p>
<h3>Output</h3>
<p>For each test case output <b>N</b> lines. The <b>i</b>-th line among them should contain two space separated integers <b>room</b> and <b>stay_time</b>, the room chosen by the <b>i</b>-th guest and the time he will stay in the hotel, <b>room</b> should be from <b>0</b> to <b>R − 1</b> inclusive and <b>stay_time</b> should be from <b>1</b> to <b>31415926</b>, inclusive. If there are several possible answers you can output any of them. But your output should be consistent as stated above. Existence of such answer is always guaranteed for our test data (see <b>Constraints</b> section below).</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>314159</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>314159</b></li>
<li><b>0</b> ≤ <b>time</b> &lt; <b>31415926</b></li>
<li><b>0</b> ≤ <b>inconv</b> ≤ <b>R</b></li>
<li>The sum of <b>R</b> over the input does not exceed <b>314159</b></li>
<li>The sum of <b>N</b> over the input does not exceed <b>314159</b></li>
<li>Visit times will be given in strictly increasing order</li>
<li>It is guaranteed that records in logbook could be recovered consistently.</li>
</ul>
</p>
<p><b>Note that <b>time</b> is strictly less than <b>31415926</b>. It is quite important.</b></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 2
0 0
314 0
5 3
3 0
31 1
314 0
2 3
0 0
1 0
2 2

<b>Output:</b>
0 31
0 31415
4 31
4 314
2 3141
0 3
1 3
0 31415
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Here <b>R = 1</b> and <b>N = 2</b>. Let's check that provided output is consistent. The first guest comes at time 0 and asks for room 0 for 31 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 314 and asks for room 0 for 31415 minutes. The first guest made this room free at time 31 so at time 314 it is free and we settle the second guest at room 0 causing zero inconvenience.</p>
<p><b>Example case 2.</b> Here <b>R = 5</b> and <b>N = 3</b>. Again let's check that provided output is consistent. The first guest comes at time 3 and asks for room 4 for 31 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 31 and asks for room 4 for 314 minutes. But the first guest is still living in this room (he will free it at time 34). Therefore, we settle the second guest at the room 0 (the next after 4 in cyclic manner) causing inconvenience 1. Finally the third guest comes at time 314 and asks for room 2 for 3141 minutes. This room is free and we settle him at this room causing zero inconvenience.</p>
<p><b>Example case 3.</b> Here <b>R = 2</b> and <b>N = 3</b>. And again let's check that provided output is consistent. The first guest comes at time 0 and asks for room 0 for 3 minutes. Since the hotel is initially empty we settle him at this room causing zero inconvenience. The second guest comes at time 1 and asks for room 1 for 3 minutes. This room is free and we settle him at this room causing zero inconvenience. The third guest comes at time 2 and asks for room 0 for 31415 minutes. But both rooms in the hotel are occupied (room 0 will be free at time 3 and room 1 will be free at time 4). Hence we do not settle this guest in any room causing him inconvenience 2. Note that stay time of such a guest actually doesn't matter. You could output any number from 1 to 31415926, inclusive, instead of 31415.</p>
