---
{"category_name":"medium","problem_code":"SUBINVER","problem_name":"SubInversing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"melfice","date_added":"26-05-2017","tags":{"0":"gainullinildar","1":"hashes","2":"ltime48","3":"medium","4":"persistence","5":"segment"},"editorial_url":"https://discuss.codechef.com/problems/SUBINVER","time":{"view_start_date":1495899840,"submit_start_date":1495899840,"visible_start_date":1495899840,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/mandarin/SUBINVER.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/russian/SUBINVER.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/vietnamese/SUBINVER.pdf">Vietnamese</a> as well.</h3>

<p>You initially start with a binary string S<sub>0</sub> which is of length <b>N</b> and has all 0s. You are then given <b>U</b> updates, which keep transforming the string. The i-th update transforms the string S<sub>i-1</sub> into S<sub>i</sub>, and hence after all the <b>U</b> updates you will be left with S<sub>U</sub>.</p> 

<p>A single update is of the form (<b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>), which means that all the 1s in the range [<b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>] (both end points included) should be changed into 0s, and all the 0s in that range should be changed to 1s.</p>

<p>You need to find out which among the <b>U</b>+1 binary strings: S<sub>0</sub>, S<sub>1</sub>, .., S<sub>U</sub>, is lexicographically the largest, and print that string.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains two integers, <b>N</b>, and <b>U</b>, denoting the length of the string and number of updates respectively. </li>
<li>The i-th of the next <b>U</b> lines contains two integers, <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, which denotes that the i-th update is to swap all the values in the string which fall between the indices <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> (both inclusive). </li>
 
<h3>Output</h3>
<p>Output a single line containing one binary string - the lexicographically largest string among the <b>U</b>+1 strings.</p>
 
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, U</b> ≤ 100,000</li>
<li>1 ≤ <b> L<sub>i</sub> </b> ≤ <b> R<sub>i</sub> </b> ≤ <b>N</b></li>
</ul>
 
 
 
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): 1 ≤ <b>N</b> ≤ 2000</li>
<li>Subtask #2 (80 points): Original constraints.</li>
</ul>
 
 
 
 
<h3>Example</h3>
 
<pre><b>Input:</b>
10 10
9 10
6 10
9 10
1 8
3 5
3 3
3 4
3 9
4 8
7 7

<b>Output:</b>
1111100011
</pre>
 
<h3>Explanation</h3>
<p>Let us see what happens in each operation:</p>
<pre>
<li>S<sub>0</sub> = 0000000000</li>
<li>After the update, [9, 10], it becomes S<sub>1</sub> = 0000000011</li>
<li>After the update, [6, 10], it becomes S<sub>2</sub> = 0000011100</li>
<li>After the update, [9, 10], it becomes S<sub>3</sub> = 0000011111</li>
<li>After the update, [1, 8], it becomes  S<sub>4</sub>  = 1111100011</li>
<li>After the update, [3, 5], it becomes  S<sub>5</sub>  = 1100000011</li>
<li>After the update, [3, 3], it becomes  S<sub>6</sub>  = 1110000011</li>
<li>After the update, [3, 4], it becomes  S<sub>7</sub>  = 1101000011</li>
<li>After the update, [3, 9], it becomes  S<sub>8</sub>  = 1110111101</li>
<li>After the update, [4, 8], it becomes  S<sub>9</sub>  = 1111000001</li>
<li>After the update, [7, 7], it becomes S<sub>10</sub> = 1111001001</li>
</pre>

<p>The lexicographically largest among these is 1111100011 and so, that is the answer.</p>