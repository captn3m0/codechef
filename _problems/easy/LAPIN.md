---
{"category_name":"easy","problem_code":"LAPIN","problem_name":"Lapindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"tuananh93","date_added":"1-05-2013","tags":{"0":"ad","1":"cakewalk","2":"june13","3":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/LAPIN","time":{"view_start_date":1371461400,"submit_start_date":1371461400,"visible_start_date":1371461400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><i>Lapindrome</i> is defined as a string which when split in the middle, gives two halves having the same characters and same frequency of each character. If there are odd number of characters in the string, we ignore the middle character and check for lapindrome. For example <b><i>gaga</i></b> is a lapindrome, since the two halves <b><i>ga</i></b> and <b><i>ga</i></b> have the same characters with same frequency. Also, <b><i>abccab</i></b>, <b><i>rotor</i></b> and <b><i>xyzxy</i></b> are a few examples of lapindromes. Note that <b><i>abbaab</i></b> is NOT a lapindrome. The two halves contain the same characters but their frequencies do not match. <br/> Your task is simple. Given a string, you need to tell if it is a lapindrome.</p>

<h3>Input:</h3>
First line of input contains a single integer <b>T</b>, the number of test cases.<br/>
Each test is a single line containing a string <b>S</b> composed of only lowercase English alphabet.<br/>

<h3>Output:</h3>
For each test case, output on a separate line: "YES" if the string is a lapindrome and "NO" if it is not.<br/>

<h3>Constraints:</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>2 ≤ |<b>S</b>| ≤ 1000, where |<b>S</b>| denotes the length of <b>S</b></li>
</ul>

<h3>Example:</h3>

<b>Input:</b>
<pre>
6
gaga
abcde
rotor
xyzxy
abbaab
ababc


</pre>
<b>Output:</b>
<pre>
YES
NO
YES
YES
NO
NO

</pre>