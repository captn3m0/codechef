---
{"category_name":"school","problem_code":"CHEFAPAR","problem_name":"Chef and His Apartment Dues","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"mgch","date_added":"1-02-2017","tags":{"0":"admin2"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/CHEFAPAR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/CHEFAPAR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/CHEFAPAR.pdf">Vietnamese</a> as well.</h3>

<p>Chef lives in a big apartment in Chefland. The apartment charges maintenance fees that he is supposed to pay monthly on time. But Chef is a lazy person and sometimes misses the deadlines. The apartment charges 1000 Rs per month as maintenance fees. Also, they also charge a one-time fine of 100 Rs for each of the late payments. It does not matter how late the payment is done, the fine is fixed to be Rs.100.</p>

<p>Chef has been living in the apartment for <b>N</b> months. Now, he wants to switch the apartment, so he has to pay the entire dues to the apartment. The deadline for the <b>N</b>-th month is also over. From his bank statement, he finds the information whether he paid apartment rent for a particular month for not. You are given this information by an array <b>A</b> of size <b>N</b>, where <b>A<sub>i</sub></b> (can be either 0 or 1) specifies whether he has paid the 1000Rs in the <b>i</b>-th month or not. Assume that Chef paid the fees in the <b>i</b>-th month, then this fees will be considered for the earliest month for which Chef has not yet paid the fees.
</p>

<p>For example, assume Chef did not pay any money in first month and 1000Rs in the second month. Then this rent of 1000Rs will be considered for 1st month. But this counts as late payment for the first month's fees, and hence he will have to pay Rs. 100 for that. And since the payment he made in the second month is not accounted for the second month, but rather for the first month, he will incur a fine of Rs.100 even for the second month. 
</p>

<p>He has not paid any of the fines so far. Can you please help in finding Chef total due (all the fines, plus all the unpaid maintenance fees) that he has to pay to apartment? </p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test cases contains an integer <b>N</b> denoting the number of months for which you have to calculate the total amount of money that Chef has to pay at the end of the <b>n</b> month to clear all of his dues.</p> 
<p>Next line of each test case contains <b>N</b> space separated integers (each of them can be either 0 or 1) denoting whether Chef paid the 1000Rs fees in the corresponding month or not. If the corresponding integer is 1, it means that Chef paid the maintenance fees for that month, whereas 0 will mean that Chef did not pay the maintenance fees that month.</p>

<h3>Output</h3>
<p>For each test case, output a single integer denoting the total amount including fine that Chef has to pay.</p>

<h3><b>Constraints</b></h3>
<ul>
<li><b>1 ≤ <b>T</b> ≤ 25</b></li>
<li><b>0 ≤ <b>A<sub>i</sub></b> ≤ 1</b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (30 points)</b>
<ul>
<li><b>1 ≤ <b>N</b> ≤ 10<sup>3</sup></b></li>
</ul>
</p>

<p>
<b>Subtask #2 (70 points)</b>
<ul>
<li><b>1 ≤ <b>N</b> ≤ 10<sup>5</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre>
<b>Input</b>
4
2
1 1
2
0 0
3
0 1 0
2
0 1

<b>Output</b>
0
2200
2300
1200
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef paid maintenance fees for both the months. So, he does not have any dues left.</p>
<p><b>Example case 2.</b> Chef did not pay the maintenance fees for any of the months. For the first month, he has to pay 1000Rs, and 100Rs fine as a late payment. For second month payments, he just have to pay 1100Rs. So, in total he has a due of 1100 + 1100 = 2200 Rs.</p>
<p><b>Example case 3.</b> In the first month, Chef did not pay his maintenance fees. He paid the maintenance of first in the second month. So, he paid a fine of 100Rs for first month. For second and third month, Chef did not pay the maintenance fees. So, he has to pay 1000Rs + 100Rs (of fine) for second month and only 1000Rs + 100Rs (of fine) for third month. In total, Chef has got to pay 100 + 1100 + 1100 = 2300 Rs. </p>
<p><b>Example case 4.</b> In the first month, Chef did not pay his maintenance fees. He paid the maintenance of first in the second month. So, he paid a fine of 100Rs for first month. For second month, Chef did not pay the maintenance fees. So, he has to pay 1000Rs + 100Rs (of fine) for second month. In total, Chef has got to pay 100 + 1100 = 1200 Rs. </p>
