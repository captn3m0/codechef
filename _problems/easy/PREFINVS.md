---
{"category_name":"easy","problem_code":"PREFINVS","problem_name":"Prefix Inversions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"melfice","date_added":"26-05-2017","tags":{"0":"easy","1":"gainullinildar","2":"implementation","3":"ltime48","4":"strings"},"editorial_url":"https://discuss.codechef.com/problems/PREFINVS","time":{"view_start_date":1495899840,"submit_start_date":1495899840,"visible_start_date":1495899840,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/mandarin/PREFINVS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/russian/PREFINVS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME48/vietnamese/PREFINVS.pdf">Vietnamese</a> as well.</h3>

<p>You are given a binary string <b>S</b>. You need to transform this string into another string of equal length consisting only of zeros, with the minimum number of operations.</p>

<p>A single operation consists of taking some prefix of the string <b>S</b> and flipping all its values. That is, change all the 0s in this prefix to 1s, and all the 1s in the prefix to 0s. You can use this operation as many number of times as you want over any prefix of the string.</p>

<h3>Input</h3>
 
<p>The only line of the input contains the binary string, <b> S </b>. </p>

 
<h3>Output</h3>
 <p>Output a single line containing one integer, the minimum number of operations that are needed to transform the given string <b>S</b> into the string of equal length consisting only of zeros.</p>
  
<h3>Constraints</h3>
 <ul>
<li>1 ≤ <b>|S|</b> ≤ 100,000</li>
</ul>
 
 
 
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): 1 ≤ <b>|S|</b> ≤ 2000</li>
<li>Subtask #2 (70 points): Original constraints.</li>
</ul>
 
 
 
 
<h3>Example</h3>
 
<pre><b>Input:</b>
01001001

<b>Output:</b>
6
</pre>
 
 
<h3>Explanation</h3>
For the given sample case, let us look at the way where we achieved minimum number of operations.<br><br>

<p> <b> Operation 1: </b>You flip values in the prefix of length 8 and transform the string into 10110110 </p>

<p> <b> Operation 2: </b>You flip values in the prefix of length 7 and transform the string into 01001000 </p>

<p> <b> Operation 3: </b>You flip values in the prefix of length 5 and transform the string into 10110000 </p>

<p> <b> Operation 4: </b>You flip values in the prefix of length 4 and transform the string into 01000000 </p>

<p> <b> Operation 5: </b>You flip values in the prefix of length 2 and transform the string into 10000000 </p>

<p> <b> Operation 6: </b>You flip values in the prefix of length 1 and finally, transform the string into 00000000 </p>