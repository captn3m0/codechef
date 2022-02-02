---
{"category_name":"medium","problem_code":"MPROD","problem_name":"Minimum Product","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"balajiganapath","date_added":"20-04-2014","tags":{"0":"easy","1":"greedy","2":"ltime11","3":"piyushkumar"},"editorial_url":"http://discuss.codechef.com/problems/MPROD","time":{"view_start_date":1398587400,"submit_start_date":1398587400,"visible_start_date":1398587400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/MPROD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/MPROD.pdf">Russian</a>.</h3>
<p>You are given a array <b>A</b> of <b>N</b> positive integers, and you can perform the following operation on the array<br /><br />
1) Pick any two indices <b>i</b> and <b>j</b> in the array<br /><br />
2) Divide A[i] and A[j] by some common factor of A[i] and A[j]<br /><br />
<br /><br />
You can perform the above operation as many number of times as you want, and the aim is to minimize the product of the resulting array. Find this minimum product. Since the answer can be a large number, print the product modulo 1000000007 (10<sup>9</sup>+7).<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases. Each testcase contains 2 lines.<br /><br />
First line of each testcase contains single integer <b>N</b>, size of the array<br /><br />
Second line of each testcase contains N space separated integers, the array <b>A</b><br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output single line indicating the answer to that testcase<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
30 points : 1&lt;=N&lt;=2000, 1&lt;=A[i]&lt;=10<sup>6</sup><br /><br />
70 points : 1&lt;=N&lt;=20000, 1&lt;=A[i]&lt;=10<sup>8</sup><br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
3<br /><br />
2 3 6<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
First divide first and third numbers by 2, then the second and third by 3. This makes all numbers equal to 1, hence the product is 1.</p>
