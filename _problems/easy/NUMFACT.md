---
{"category_name":"easy","problem_code":"NUMFACT","problem_name":"Number of Factors","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/nbSa7-KIUjo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_adm","problem_tester":"Rubanenko","date_added":"7-06-2013","tags":{"0":"factorization","1":"ltime01","2":"math","3":"simple","4":"vamsi_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NUMFACT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NUMFACT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p>Alice has learnt factorization recently. Bob doesn't think she has learnt it properly and hence he has decided to quiz her. Bob gives Alice a very large number and asks her to find out the number of factors of that number. To make it a little easier for her, he represents the number as a product of <b>N</b> numbers. Alice is frightened of big numbers and hence is asking you for help. Your task is simple. Given <b>N</b> numbers, you need to tell the number of distinct factors of the product of these <b>N</b> numbers.</p>

<h3>Input:</h3>
First line of input contains a single integer <b>T</b>, the number of test cases.<br/>
Each test starts with a line containing a single integer <b>N</b>.<br/> The next line consists of <b>N</b> space separated integers (<b>A<sub>i</sub></b>).<br/>

<h3>Output:</h3>
For each test case, output on a separate line the total number of factors of the product of given numbers.<br/>

<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 10
2 ≤ <b>A<sub>i</sub></b> ≤ 1000000

</pre>

<h3>Example:</h3>

<b>Input:</b>
<pre>
3
3
3 5 7
3
2 4 6
2
5 5

</pre>
<b>Output:</b>
<pre>
8
10
3

</pre>

<h3>Scoring:</h3>
You will be awarded <b>40</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 100.<br/>
You will be awarded another <b>30</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 10000.<br/>
The remaining <b>30</b> points will be awarded for correctly solving for <b>A<sub>i</sub></b> ≤ 1000000.<br/>
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>