---
{"category_name":"hard","problem_code":"ANUSAR","problem_name":"Substrings and Repetitions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"gerald","date_added":"3-03-2014","tags":{"0":"anudeep2011","1":"cook46","2":"disjoint","3":"medium","4":"segment","5":"stack","6":"suffix","7":"suffix"},"editorial_url":"http://discuss.codechef.com/problems/ANUSAR","time":{"view_start_date":1400437800,"submit_start_date":1400437800,"visible_start_date":1400437800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUSAR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUSAR.pdf">Russian</a> as well.</h3>
<p><h3>Statement</h3>
</p><p>Given a string <b>S</b> and several frequencies <b>F<sub>i</sub></b>. For each <b>F<sub>i</sub></b> output the number of substrings of <b>S</b> (the characters of substring should be contiguous) that occur at least <b>F<sub>i</sub></b> times in <b>S</b>. Note, that we consider two substrings distinct if they have distinct length, or they have distinct starting indices.</p>
<h3>Input</h3>
<p>The first line of input contains integer <b>T</b>, the number of test cases.</p>
<p>The first line of each test case contains string <b>S</b> (it contains only lowercase Latin letters). The second line of each test case contains an integer <b>Q</b>, that is the number of queries to be answered. Then <b>Q</b> lines follows containing <b>F<sub>i</sub></b> each.</p>
<h3>Output</h3>
<p>For each query, output the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>F<sub>i</sub></b> ≤ <b>200000</b></li>
<li><b>Sum of |S| over all test cases ≤ 200000</b></li>
<li><b>Sum of Q over all test cases ≤ 200000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
aaeddf
4
1
2
3
4

<b>Output:</b>
21
4
0
0
</pre><p> </p>
<h3>Explanation</h3>
<p>There are a total of 6*(6+1)/2 substrings, all of them occur at least once. So for <b>F<sub>1</sub>=1</b> answer is equal to 21. Note that substring <b>"a"</b> is repeated 2 times in <b>S</b>, both the instances are added to the answer.</p>
<p>Look at <b>F<sub>2</sub>=2</b>. Substring <b>"a"</b> and substring <b>"d"</b> occurs 2 times each in <b>S</b>. The answer for <b>F<sub>2</sub></b> is 4, that is all the occurrences of <b>"a"</b> and <b>"d"</b>.</p>
<p>There are no substrings which repeat more than twice. So rest answers are 0</p>
