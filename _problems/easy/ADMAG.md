---
{"category_name":"easy","problem_code":"ADMAG","problem_name":"Aditi and Magic Trick","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhra73","problem_tester":"laycurse","date_added":"29-06-2015","tags":{"0":"abhra73","1":"aug15","2":"fibonacci","3":"simple","4":"zeckendorf"},"editorial_url":"http://discuss.codechef.com/problems/ADMAG","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/ADMAG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/ADMAG.pdf">Russian</a>.</h3>


<p>Aditi recently discovered a new magic trick. First, she gives you an integer <b>N</b> and asks you to think an integer between <b>1</b> and <b>N</b>. Then she gives you a bundle of cards each having a sorted list (in ascending order) of some distinct integers written on it. The integers in all the lists are between <b>1</b> and <b>N</b>. Note that the same integer may appear in more than one card. Now, she shows you these cards one by one and asks whether the number you thought is written on the card or not. After that, she immediately tells you the integer you had thought of.</p>
<p>Seeing you thoroughly puzzled, she explains that she can apply the trick so fast because she is just adding the first integer written on the cards that contain the integer you had thought of, and then gives the sum as the answer. She calls a bundle <i>interesting</i> if when the bundle is lexicographically sorted, no two consecutive cards have any number in common. Now she challenges you to find out the minimum number of cards she will need for making an <i>interesting</i> bundle such that the magic trick will work every time.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>		
<li>Each test case contains a line with a single integer <b>N</b>.</li>
</ul> 

<h3>Output</h3>
<ul><li>For each test case, output a line containing a single integer denoting the minimum number of cards required.</li></ul>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ N ≤ 10<sup>18</b></li>
</ul>

<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>1 ≤ T ≤ 10, 1 ≤ N ≤ 10</b> (5 points)</li>
<li>Subtask #2: <b>1 ≤ T ≤ 100, 1 ≤ N ≤ 1000</b> (10 points)</li>
<li>Subtask #3: Original Constraints (85 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
1
4

<b>Output:</b>
1
3
</pre>

<h3>Explanation</h3>
<ul>
<li><b>In example 1</b>, only <b>1</b> card containing <b>{1}</b> will work.</li>
<li><b>In example 2</b>, make <b>3</b> cards containing <b>{1,4}, {2}</b> and <b>{3,4}</b>.
<ul>
<li>Assume you thought of <b>1</b>, then you will select the 1<sup>st</sup> card <b>{1,4}</b>, then she will correctly figure out the integer you thought being <b>1</b>.</li>
<li>Assume you thought of <b>2</b>, then you will select the 2<sup>nd</sup> card <b>{2}</b>, then she will correctly figure out the integer you thought being <b>2</b>.</li>
<li>Assume you thought of <b>3</b>, then you will select the 3<sup>rd</sup> card <b>{3,4}</b>, then she will correctly figure out the integer you thought being <b>3</b>.</li>
<li>Assume you thought of <b>4</b>, then you will select 1<sup>st</sup> card <b>{1,4}</b> and 3<sup>rd</sup> card <b>{3,4}</b>, then she will calculate the sum of the first integers of the two card <b>1 + 3 = 4</b>, and she will answer it.</li>
</ul>
Thus her trick will work well in every case. And we can check it easily that the cards are sorted in <a href="https://en.wikipedia.org/wiki/Lexicographical_order">lexicographical order</a> and two consecutive cards have no common integers.
</ul>

