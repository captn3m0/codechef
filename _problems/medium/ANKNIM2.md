---
{"category_name":"medium","problem_code":"ANKNIM2","problem_name":"Bored of Nim","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":"rubanenko","date_added":"25-05-2015","tags":{"0":"code_master01","1":"cook59","2":"fft","3":"game","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/ANKNIM2","time":{"view_start_date":1434911400,"submit_start_date":1434911400,"visible_start_date":1434911400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/mandarin/ANKNIM2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/russian/ANKNIM2.pdf">Russian</a> as well.</h3>


<p>Rahul and Rashi are bored of playing the game of <a href="https://en.wikipedia.org/?title=Nim"> Nim</a> all day. More so, Rahul has been losing all the games. Actually, the array of stone piles for a game is always selected by Rashi from a huge <strong>N</strong>-length array <strong>A</strong>. This selected array is always a subarray of <strong>A</strong>.</p>
<p>Rahul, now frustrated by his losing streak, insists that he would play the next game only if she chooses a game array of length <strong>m</strong>. </p>
<p>Can you find the number of such subarrays that Rashi can choose so that Rahul still loses? Moreover, since the value of <strong>m</strong> is decided by Rahul, can you do this for all possible values of <strong>m</strong>?</p>
<p>Please note that Rahul is always the first player.</p>

<h3>Input:</h3><p>The first line contains an integer <strong>T</strong>, the number of test cases to follow.
In each of the test cases, the first line contains a single integer <b>N</b>, and the next line contains <b>N</b> integers, representing the array <b>A</b>.

<h3>Output:</h3>
<p>Output the results of each test case on a new line. For each test case, output the results for all values of <strong>m</strong>, that is, <strong>m</strong> = 1, <strong>m</strong> = 2 ... <strong>m</strong> = <b>N</b>, separated by a single space.</p>

<h3>Constraints:</h3>
<p><ul>
<li>1 ≤ <strong>T</strong> ≤ 3<br /></li>
<li>1 ≤ <strong>N</strong> ≤ 10<sup>5</sup><br /></li>
<li>0 ≤ <strong>A[i]</strong> ≤ 10<sup>9</sup></li>
<li>1 ≤ <strong>m</strong> ≤ <strong>N</strong></li>
</ul>
</p>

<h3>Example:</h3>
<p><strong>Sample Input:</strong>  
</p>
<pre>
2
6
1 2 3 2 1 3
4
1 1 1 1

</pre>
<p><strong>Sample Output:</strong><br />
<pre>
0 0 3 0 0 1
0 3 0 1

</pre></p>

<p><strong>Explanation</strong><br />
<pre>
For the first test case and m = 3, required sub-arrays are [1,2,3], [3,2,1] and [2,1,3].
</pre></p>