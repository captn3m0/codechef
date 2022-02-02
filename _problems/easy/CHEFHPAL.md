---
{"category_name":"easy","problem_code":"CHEFHPAL","problem_name":"Chef Hates Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"kotlin","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"rust","41":"SCALA","42":"SCM chicken","43":"SCM guile","44":"SCM qobi","45":"ST","46":"swift","47":"TCL","48":"TEXT","49":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"r_64","problem_tester":null,"date_added":"6-09-2017","tags":{"0":"bruteforce","1":"medium","2":"nov17","3":"r_64"},"editorial_url":"https://discuss.codechef.com/problems/CHEFHPAL","time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/CHEFHPAL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/CHEFHPAL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/CHEFHPAL.pdf">Vietnamese</a> as well.</h3>

<p>
	Chef's birthday is coming soon! His friend Fehc is going to send him a string of length <strong>N</strong> as a gift. Knowing that Chef doesn't like palindromes, Fehc wants the longest palindromic substring to be as short as possible. The string should only contain the first <strong>A</strong> latin letters(e.g. let <strong>A</strong>=2, then this string only contains <span style="font-family:courier new,courier,monospace;">'a'</span> and <span style="font-family:courier new,courier,monospace;">'b'</span>). Please help Fehc and find such a string. If multiple solution exists, you can print any.</p>
<h3>
	Input</h3>
<ul>
	<li>The first line of input is an integer <b>T</b>, denoting the number of test cases.</li>
	<li><b>T</b> tests follow. For each test, there is a line containing two space-separated integers <b>N</b> and <b>A</b>.</li>
</ul>
<h3>
	Output</h3>
<p>
	For each test, print a number <strong>L</strong> and a string <strong>s</strong>, separated by one space. <strong>L</strong> is equal to the length of longest palindromic substring of <strong>s</strong>, and <strong>s</strong> is the string that Fehc will give to Chef. You must minimize <strong>L</strong>, but in the case of multiple <strong>s</strong>'s, any valid <strong>s</strong> is OK.</p>
<h3>
	Constraints</h3>
<ul>
	<li><strong>1</strong>≤<strong>T</strong>≤<strong><strong>10<sup>5</sup></strong></strong></li>
	<li><b>1</b>≤<b>N</b>≤<strong>10<sup>5</sup></strong></li>
	<li><strong>1</strong>≤<strong>A</strong>≤<strong>26</strong></li>
	<li>(sum of <strong>N</strong> in all test cases)≤<strong><strong>10<sup>5</sup></strong></strong></li>
</ul>
<p>
	Subtask #1 (21 points):</p>
<ul>
	<li><strong>N≤10</strong>.</li>
</ul>
<p>
	Subtask #2 (79 points):</p>
<ul>
	<li>original constraints.</li>
</ul>
<h3>
	Example</h3>
<pre>
<b>Input:</b>
4
5 2
12 26
8 26
7 2

<b>Output:</b>
3 aaabb
1 hapybirthday
1 codechef
3 aaababb

</pre>
<h3>
	Explanation</h3>
<p>
	<b>Example case 1.</b> There are multiple solutions. For example, "abaaa" is also correct. <b>Note that "abbaa" is not a correct solution, since "abba" is a palindromic substring of length 4, which is not optimal.</b></p>
