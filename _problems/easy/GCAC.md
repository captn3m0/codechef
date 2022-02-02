---
{"category_name":"easy","problem_code":"GCAC","problem_name":"Greedy Candidates","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"naksh9619","problem_tester":null,"date_added":"2-08-2017","tags":{"0":"aug17","1":"implementation","2":"naksh9619","3":"simple"},"editorial_url":"https://discuss.codechef.com/problems/GCAC","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/GCAC.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/GCAC.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/GCAC.pdf">vietnamese</a> as well.</h3>

<p>The placements/recruitment season is going on in various colleges. The interviews are over, and each company has selected some students. But since each student can end up finally in at most one company, a student might have to reject a company which selected him. The companies know this, and hence, the companies usually select more students than it can actually employ. So now, the exact pairings should be done. We talk about one such session in a famous college.</p>

<p>There are a total of <b>N</b> candidates (numbered from 1 to <b>N</b>) and <b>M</b> companies (numbered from 1 to <b>M</b>) taking part in it. Each candidate has a certain minimum expectation of salary, which is given by the array <b>minSalary</b> (All the arrays are 1-indexed). For each candidate, you are also given the information regarding the companies which have selected him. This information is given by an array <b>qual</b> of size <b>N * M</b>, where <b>qual</b>[i][j] = 1 if and only if the i-th candidate has qualified for a job in the j-th company. A company will provide a fixed salary to the candidates it employs, which is given by the array <b>offeredSalary</b>. Also, a company has an upper bound on the number of candidates it can employ and finally give an offer to. This information is provided by array <b>maxJobOffers</b>.</p>

<p>The D-day has come. Each candidate from 1, 2, .. <b>N</b> (in this order) will go to the placements coordinator. When the i-th student goes, among the companies which have selected him, and which still haven't reached their <b>maxJobOffers</b> limit, he picks the company which provides the maximum <b>offeredSalary</b>, provided that it is at least his <b>minSalary</b>.</p> 

<p>You have to find the number of the candidates that will end up with a job, the total amount of salaries that the candidates will get, and the number of companies that won't be able to employ even a single candidate. This information is very crucial for the placement coordinator, so as to analyze whether it makes sense to invite a company to come to the placements session next year or not. Please help the coordinator!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows</li>
<li>First line of each test case contains two space separated integer <b>N, M</b>.</li>
<li>The next line contains <b>N</b> space separated integers denoting the array <b>minSalary</b>.</li>
<li>Each of the next <b>M</b> lines contains two space separated integers denoting <b>offeredSalary</b>[i] and <b>maxJobOffers</b>[i].</li>
<li>The next <b>N</b> lines will contain the description of the 2-D array <b>qual</b>. Each of the <b>N</b> lines will contain <b>M</b> binary integers (without any space): j-th integer in the i-th line will denote <b>qual</b>[i][j].</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output three integers in a new line, denoting the number of the candidates that will get a job, the total amount of salaries that the candidates will get, and the number of companies that won't be able to hire even a single candidate.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li> 1 ≤ <b>T</b> ≤ 10</li>
<li> 1 ≤ <b>N, M</b> ≤ 10<sup>3</sup></li>
<li> 0 ≤ <b>minSalary</b>[i] ≤ 10<sup>9</sup></li>
<li> 0 ≤ <b>qual</b>[i][j] ≤ 1</li>
<li> 1 ≤ <b>offeredSalary</b>[i] ≤ 10<sup>9</sup></li>
<li> 1 ≤ <b>maxJobOffers</b>[i] ≤ 10<sup>6</sup></li>
<li>All elements of the array <b>offeredSalary</b> are distinct</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (30 points): 1 ≤ <b>N, M</b> ≤ 200</li>
<li><b>Subtask 2</b> (70 points): Original Constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 6
5000 10000 3000 20 100
10000 2
800 2
600 1
10 8
1000 9
2000 10
111111
100000
000000
000001
100100

<b>Output:</b>
3 22000 4
</pre>

<h3>Explanation</h3>
There are 5 candidates and 6 companies. </p>
<p>The first candidate wants a job that pays at least 5000 Rs. He has qualified in all the companies, so he will choose the 1st company that provides him the maximum money, 10000 Rs.</p>
<p>The second candidate will get a job offer of 10000 Rs from 1st company.</p>
<p>The third candidate has not qualified in any company, so he won't get any job.</p>
<p>The fourth candidate has qualified only in 6-th company which provides a salary of 2000 Rs which is greater than or equal to 20, the minimum salary expected by the fourth candidate.</p>
<p>The fifth candidate wants minimum salary 100 Rs. He has qualified in company 1st and 4th. The 1st company won't hire him as it has already filled the quota of hiring two people. 4th company is providing the candidate less than 100 Rs, so he won't join that too.</p>
<p>So, overall there are three candidates that got the job (first, second and fourth). Total amount of salary is 10000 + 10000 + 2000 = 22000. Only first and 6-th companies are able to select some candidates, so there are 4 companies that are not able to hire any candidate. Hence, the answer will be 3 22000 4.</p.