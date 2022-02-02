---
{"category_name":"easy","problem_code":"GIFTCHEF","problem_name":"Gift and Chef","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"xcwgf666","date_added":"4-02-2016","tags":{"0":"dynamic","1":"easy","2":"kmp","3":"nov16","4":"omelyanenko"},"editorial_url":"http://discuss.codechef.com/problems/GIFTCHEF","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/GIFTCHEF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/GIFTCHEF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/GIFTCHEF.pdf">Vietnamese</a> as well.</h3>


<p>
Last week Penguin Charlie had a birthday. Chef presented him a string <b>S</b>.
</p>

<p>
Unfortunately, Charlie doesn't like string <b>S</b>, he likes string <b>F</b>. Charlie wants to create a few strings <b>F</b> from <b>S</b> by cutting. Cutting means getting some substrings from <b>S</b> that are equal to <b>F</b> and delete them from string S. After deleting a substring, the left and right parts of the resulting string remain separated. Note, a substring of a string <b>S</b> is a consecutive sequence of characters in <b>S</b>.
</p>

<p>
In some cases Charlie can still get substrings equal to <b>F</b> from the pieces that remain after cutting the original string. Your task is to calculate the number of ways to cut out at least one occurrence of the substring <b>F</b> in <b>S</b>. As this number may be too large, print it modulo 10<sup>9</sup> + 7.
</p>
<p> </p>


<h3>Input</h3>
<p>
Input begins with an integer <b>T</b>: the number of test cases.<br>
Each test case consists of a two lines with two strings: <b>S</b>, <b>F</b>.
</p>

<h3>Output</h3>
<p>
For each test case, output a single line indicating the number of ways Charlie can cut at least one occurrence of <b>F</b> from <b>S</b> modulo 10<sup>9</sup> + 7.
</p>

<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<br>
<b>Subtask 1 : 10 points </b> 
<li><b>1</b> ≤ <b>|F|</b> ≤ <b>|S|</b> ≤ <b>100</b> </li>
<br>
<b>Subtask 2 : 30 points </b> 
<li><b>1</b> ≤ <b>|F|</b> ≤ <b>|S|</b> ≤ <b>5000</b> </li>
<br>
<b>Subtask 3 : 60 points</b>
<li><b>1</b> ≤ <b>|F|</b> ≤ <b>|S|</b> ≤ <b>300000</b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
chefandcharliethebest
charliethebest
heknowsimeanityeahyouknowimeanityouknow
imeanit
aaaaa
aa</tt>

<b>Output:</b>
<tt>1
3
7</tt>
</pre>

<h3>Explanation</h3> 
<p>
<b>Example case 1.</b><br>
chefand|<b>charliethebest</b>|<br>
1 way to cut 1 string "charliethebest" from the string S:<br>
<b>Example case 2.</b><br>
heknows|<b>imeanit</b>|yeahyouknow|<b>imeanit</b>|youknow<br>
2 ways to cut 1 string "imeanit" from the string S - take one of them<br>
1 way to cut 2 strings "imeanit" from the string S - take both:<br>
<b>Example case 3.</b><br>
4 ways to cut 1 string "aa" from the string "aaaaa": |<b>aa</b>|aaa, a|<b>aa</b>|aa, aa|<b>aa</b>|a, aaa|<b>aa</b>|<br>
3 ways to cut 2 strings "aa" from the string "aaaaa": |<b>aa</b>||<b>aa</b>|a, |<b>aa</b>|a|<b>aa</b>|, a|<b>aa</b>||<b>aa</b>|.<br>
</p>