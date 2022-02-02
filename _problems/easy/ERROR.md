---
{"category_name":"easy","problem_code":"ERROR","problem_name":"Chef and Feedback","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":null,"date_added":"11-12-2013","tags":{"0":"cakewalk","1":"jan14","2":"programming","3":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/ERROR","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/ERROR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/ERROR.pdf">Russian</a>.</h3>
<p> Lots of geeky customers visit our chef's restaurant everyday. So, when asked to fill the feedback form, these customers represent the feedback using a binary string (i.e a string that contains only characters <b>'0'</b> and <b>'1'</b>. </p>
<p>Now since chef is not that great in deciphering binary strings, he has decided the following criteria to classify the feedback as <b>Good</b> or <b>Bad</b> : <br/><br/></br/></br/></p>
<p>If the string contains the substring <b>"010"</b> or <b>"101"</b>, then the feedback is <b>Good</b>, else it is <b>Bad</b>. Note that, to be <b>Good</b> it is not necessary to have both of them as substring.<br/> <br/></br/></br/></p>
<p> So given some binary strings, you need to output whether according to the chef, the strings are <b>Good</b> or <b>Bad</b>. </p>
<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of feedbacks. Each of the next <b>T</b> lines contains a string composed of only <b>'0' </b> and <b>'1'</b>.</p>
<h3>Output</h3>
<p> For every test case, print in a single line <b>Good</b> or <b>Bad</b> as per the Chef's method of classification.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b>  100 </b></li>
<li><b> 1 </b> ≤ <b> |S| </b>  ≤ <b> 10<sup>5</sup> </b></li>
</ul>
<p><br/><br />
Sum of length of all strings in one test file will not exceed <b>6*10<sup>6</sup></b>.<br />
<br/></br/></br/></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
11111110
10101010101010
<br/>
<b>Output:</b>
Bad
Good
<br/>
</br/></br/></pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
The string doesn't contain <b>010</b> or <b>101</b> as substrings.
 </br/></p>
<p><b>Example case 2.</b><br/><br />
The string contains both <b>010</b> and <b>101</b> as substrings.
</br/></p>
