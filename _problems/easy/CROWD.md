---
{"category_name":"easy","problem_code":"CROWD","problem_name":"Three is Crowd","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"laycurse","date_added":"5-08-2012","tags":{"0":"maths","1":"matrix","2":"sep12","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/CROWD","time":{"view_start_date":1347346623,"submit_start_date":1347346623,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><i>Two's company, three's a crowd!</i></p>

<p>It's been one year since Chef met his brother. Last year, his younger brother came to visit him during this time of the year. This year, the Chef is planning to go visit his brother. Chef's brother has planned to throw a "Welcome Party" for him. He wants to invite people from his neighbourhood (i.e. from the street where he lives). There are <b>N</b> houses on the street in a single line (not considering the brother's house). He wants the party to be fun and he will not like to invite people who might spoil the mood of the party. If people are invited from three consecutive houses on the street, they might create trouble. As they say, three's a crowd! He doesn't want to ruin the Chef's <i>Welcome Party</i> and so he will not want to send invites to <i>any</i> three consecutive houses. He wants you to tell him how many ways are there for him to go wrong. Note that he can play safe by not inviting anyone to avoid a <i>crowd</i>.</p>

<h3>Input:</h3>

<p>First line of the input contains a single integer <b>T</b>, the number of test cases.<br/>
Each test case contains a line containing a single integer <b>N</b> described above.</p>

<h3>Output:</h3>

<p>For each test case output a single integer denoting the number of ways the brother can go wrong with planning the party.<br/>
The answer can get quite large. So output the total number of ways modulo 10<sup>9</sup>+7.</p>

<h3>Constraints:</h3>
<pre>
1<=<b>T</b><=10000
1<=<b>N</b><=10<sup>15</sup>

</pre>

<h3>Example:</h3>

<b>Input:</b>
<pre>
2
3
4

</pre>

<b>Output:</b>
<pre>
1
3

</pre>

<b>Explanation:</b></br>
<i>Case 1:</i> The only way he can go wrong is by inviting all the houses.<br/>
<i>Case 2:</i> First way of getting wrong is by inviting houses (1,2,3). Second way to get wrong is by inviting houses (2,3,4). Third way of going wrong is by inviting all 4 houses i.e. (1,2,3,4).
