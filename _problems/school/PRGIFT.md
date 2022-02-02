---
{"category_name":"school","problem_code":"PRGIFT","problem_name":"Chef and Gift","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/qyPOc6rF4e4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen","problem_tester":"","date_added":"15-07-2014","tags":{"0":"ad","1":"aug14","2":"cakewalk","3":"dpraveen"},"problem_difficulty_level":"Cakewalk","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/PRGIFT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRGIFT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3> Read problems statements in <a target="_blank" href="https://www.codechef.com/download/translated/AUG14/mandarin/PRGIFT.pdf">Mandarin Chinese </a> and <a target="_blank" href="https://www.codechef.com/download/translated/AUG14/russian/PRGIFT.pdf">Russian</a>.</h3>

<p>
Today is chef's friend's birthday. He wants to give a gift to his friend. So he was desperately searching for some gift here and there. </br>
</p>

<p>
Fortunately, he found an array a of size <b>n</b> lying around. The array contains positive integers. Chef's friend likes even numbers very much. So for the gift, chef will choose a <b> consecutive non-empty</b> segment of the array. The segment should contain exactly <b>k</b> even integers. Though it can have any number of odd integers.
He will then pick that segment and gift it to his friend. </br>
</p>

<p>
But there is a problem. It might not be always possible for the chef to choose such a segment. Please tell whether it is possible for chef to select some gift or not?

</p>

<h3>Input</h3>
<p>
First line of the input contains a single integer <b> T </b> denoting number of test cases. </br>
For each test case, first line contains two space separated integers <b>n, k</b>. </br>
Next line contains <b>n</b> space separated integers denoting content of array <b>a</b>. </br>
It is also guaranteed that all the numbers in the array <b>a</b> are distinct. </br>
</p>


<h3>Output</h3>
<p>
For each test case, print a single line containing "YES" or "NO" (without quotes) corresponding to the situation.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>50</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>a <sub>i </sub> </b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
2 1
1 2
3 2
2 6 5
3 3
2 4 5
4 2
1 2 4 5

<b>Output:</b>
YES
YES
NO
YES


<h3>Explanation</h3>
<p>
For <b> first </b> test case, we can select a[2, 2] = {2}. </br>
For <b>second </b> test case, we can select a[1, 2] = {2, 6}. </br>
For <b>third </b> test case, we can not select any consecutive segment having exactly 3 even numbers. </br>
For <b>fourth </b> test case, we can select a[2, 3] = {2, 4}. </br>
</p>

<h3> Note </h3>

<p>
A consecutive non empty segment of array a is a segment a[l], a[l + 1] , , a[r] such that 1 ≤ l ≤ r ≤ n. 
</p>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>