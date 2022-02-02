---
{"category_name":"easy","problem_code":"LUMPYBUS","problem_name":"Lumpy - The Bus Driver","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"pushkarmishra","date_added":"29-07-2016","tags":{"0":"admin2","1":"easy","2":"greedy","3":"ltime38"},"editorial_url":"http://discuss.codechef.com/problems/LUMPYBUS","time":{"view_start_date":1469901600,"submit_start_date":1469901600,"visible_start_date":1469901600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/mandarin/LUMPYBUS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/russian/LUMPYBUS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/vietnamese/LUMPYBUS.pdf">Vietnamese</a> as well.</h3>




<img src="https://codechef_shared.s3.amazonaws.com/upfiles/Bus_Driver_Lumpy_2.jpg" height="250" width="350" />

<p>Lumpy is a bus driver. Today, the conductor is absent so Lumpy has to do the conductor's job as well. There are <b>N</b> creatures in the bus. Sometimes the creatures don't carry change and can't pay the exact amount of the fare. Each creature in the bus today has paid an amount
greater than his/her fare. You are given information about the <b>extra</b> amount paid by each creature, by an array <b>A</b> of size <b>N</b>, where <b>A<sub>i</sub></b> denotes the extra amount paid by the <b>i</b>-th creature, in rupees.</p>

<p>After the end of the trip, Lumpy noticed that he had <b>P</b> one rupee coins and <b>Q</b> two rupee coins. He wants to pay back the creatures using this money. Being a kind hearted moose, Lumpy wants to pay back as many creatures as he can. Note that Lumpy will 
not pay back the <b>i</b>-th creature if he can't pay the <b>exact</b> amount that the <b>i</b>-th creature requires with the coins that he possesses. </p>

<p>Lumpy is busy driving the bus and doesn't want to calculate the maximum number of creatures he can satisfy - He will surely cause an accident if he tries to do so. Can you help him out with this task? </p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>For each test case, first line consists of three space separated integers <b>N</b>, <b>P</b> and <b>Q</b>.</p>
<p>Second line consists of <b>N</b> space separated integers <b>A</b> containing <b>N</b> space integers, where <b>i</b>-th integer denotes <b>A<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing an integer corresponding to maximum number of creatures that Lumpy can pay back.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>P, Q</b> ≤ <b>10<sup>14</sup></b></li>
<li>Sum of <b>N</b> over all the cases does not exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (15 points)</b>
<ul>
<li><b>P</b> = 0</li>
</ul> 

<b>Subtask #2 (15 points)</b>
<ul>
<li><b>Q</b> = 0</li>
</ul>

<b>Subtask #3 (70 points)</b>
<ul>
<li>Original constraints</li>
</ul>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
3 3 0
1 2 2
3 2 1
1 2 1
4 5 4
2 3 4 5</tt>

<b>Output:</b>
<tt>2
3
3</tt>
</pre>

<h3>Explanation</h3>
<p> In Test <b>1</b>, Lumpy has just <b>3</b> one rupee coins. </br>
He can pay creatures numbered <b>{1, 2}</b> or creatures numbered <b>{1, 3}</b> with these coins. Thus, answer is 2. </p>
<p> In Test <b>2</b>, Lumpy has <b>2</b> one rupee coins and <b>1</b> two rupee coin. </br>
In the optimal solution, Lumpy can give the two rupee coin to creature <b>2</b> and the one rupee coins to creatures <b>1</b> and <b>3</b>. Thus, answer is 3. </p>
