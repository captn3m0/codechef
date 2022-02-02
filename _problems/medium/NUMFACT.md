---
{"category_name":"medium","problem_code":"NUMFACT","problem_name":"Number of Factors","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"Rubanenko","date_added":"7-06-2013","tags":{"0":"factorization","1":"ltime01","2":"simple","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/NUMFACT","time":{"view_start_date":1372581299,"submit_start_date":1372581299,"visible_start_date":1372581299,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice has learnt factorization recently. Bob doesn't think she has learnt it properly and hence he has decided to quiz her. Bob gives Alice a very large number and asks her to find out the number of factors of that number. To make it a little easier for her, he represents the number as a product of <b>N</b> numbers. Alice is frightened of big numbers and hence is asking you for help. Your task is simple. Given <b>N</b> numbers, you need to tell the number of distinct factors of the product of these <b>N</b> numbers.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test starts with a line containing a single integer <b>N</b>.<br/> The next line consists of <b>N</b> space separated integers (<b>A<sub>i</sub></b>).<br/></br/></br/></br/></p>
<h3>Output:</h3>
<p>For each test case, output on a separate line the total number of factors of the product of given numbers.<br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 10
2 ≤ <b>A<sub>i</sub></b> ≤ 1000000

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
3
3
3 5 7
3
2 4 6
2
5 5

</pre><p><b>Output:</b></p>
<pre>
8
10
3

</pre><h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 100.<br/><br />
You will be awarded another <b>30</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 10000.<br/><br />
The remaining <b>30</b> points will be awarded for correctly solving for <b>A<sub>i</sub></b> ≤ 1000000.<br/></br/></br/></br/></p>
