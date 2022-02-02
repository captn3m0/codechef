---
{"category_name":"easy","problem_code":"PRGIFT","problem_name":"Chef and Gift","languages_supported":{"0":"C","1":"CPP 4.9.2","2":"JAVA"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen","problem_tester":null,"date_added":"15-07-2014","tags":{"0":"ad","1":"aug14","2":"cakewalk","3":"dpraveen"},"editorial_url":"http://discuss.codechef.com/problems/PRGIFT","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/PRGIFT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/PRGIFT.pdf">Russian</a>.</h3>
<p>
Today is chef's friend's birthday. He wants to give a gift to his friend. So he was desperately searching for some gift here and there. 
</p>
<p>
Fortunately, he found an array a of size <b>n</b> lying around. The array contains positive integers. Chef's friend likes even numbers very much. So for the gift, chef will choose a <b> consecutive non-empty</b> segment of the array. The segment should contain exactly <b>k</b> even integers. Though it can have any number of odd integers.<br />
He will then pick that segment and gift it to his friend. 
</p>
<p>
But there is a problem. It might not be always possible for the chef to choose such a segment. Please tell whether it is possible for chef to select some gift or not?</p>
<h3>Input</h3>
<p>
First line of the input contains a single integer <b> T </b> denoting number of test cases. <br />
For each test case, first line contains two space separated integers <b>n, k</b>. <br />
Next line contains <b>n</b> space separated integers denoting content of array <b>a</b>. <br />
It is also guaranteed that all the numbers in the array <b>a</b> are distinct. 
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
</pre><p>
<code><br />
for (int i = 0; i &lt; n; i++)<br />
    if (i > 0) {<br />
       ans++;<br />
    } else {<br />
       ans--;<br />
    }<br />
</code></p>
<h3>Explanation</h3>
<p>
For <b> first </b> test case, we can select a[2, 2] = {2}. <br />
For <b>second </b> test case, we can select a[1, 2] = {2, 6}. <br />
For <b>third </b> test case, we can not select any consecutive segment having exactly 3 even numbers. <br />
For <b>fourth </b> test case, we can select a[2, 3] = {2, 4}. 
</p>
<h3> Note </h3>
<p>
A consecutive non empty segment of array a is a segment a[l], a[l + 1] , , a[r] such that 1 ≤ l ≤ r ≤ n.
</p>
