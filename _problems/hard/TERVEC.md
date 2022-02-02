---
{"category_name":"hard","problem_code":"TERVEC","problem_name":"Terrible vectors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kevinsogo","date_added":"10-07-2015","tags":{"0":"hadamard","1":"hard","2":"matrices","3":"paley","4":"pavel1996","5":"sept15","6":"sylvesters","7":"williamson"},"editorial_url":"http://discuss.codechef.com/problems/TERVEC","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/TERVEC.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/TERVEC.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>You are given an integer <b>N</b>. Consider a vector <b>a</b> of length <b>N<sup>2</sup></b> accessible via 0-based indexing.</p>
<p>Let's call the following transformation a <b>TVT-transformation</b> (Terrible Vector transformation).<br /><br />
<img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/TERVEC1.jpg" />
</p>
<p>We will call a vector <b>g</b> a <em>good</em> vector if <br />
<img src="https://s3.amazonaws.com/codechef_shared/download/SEPT15/TERVEC2.jpg" />
</p>
<p>For some reason, you want to find a vector <b>a</b> of length <b>N<sup>2</sup></b> such that it's elements are either <b>1</b> or <b>-1</b> and after applying <b>TVT-transformation</b> (i.e. <b>b</b>), it results in a good vector.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. Each test case is described by one line containing one integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case output one line with the word <b>NO</b> if it's not possible to find such vector. Otherwise output <b>YES</b> on the first line and <b>N<sup>2</sup></b> space-separated integers (each either <b>-1</b> or <b>1</b>) on the second - the answer for this test case.</p>
<p>If there are multiple possible answers, output any one of them.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
YES
1
YES
1 1 1 -1

</pre><h3>Subtasks</h3>

<p><b>Subtask 1:(10 points) </b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>8</b></li>
</ul>

<p><b>Subtask 2: (20 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 30</b></li>
</ul>

<p><b>Subtask 3: (30 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>60</b></li>
</ul>

<p><b>Subtask 4: (40 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>

<h3>Explanation</h3>
<p>Sample example 2: After <b>TVT-transformation</b>, the vector will transform to <b>(4, 0, 0, 4)</b> which is a good vector for <b>N = 2</b></p>
