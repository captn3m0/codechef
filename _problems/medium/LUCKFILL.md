---
{"category_name":"medium","problem_code":"LUCKFILL","problem_name":"Little Elephant and Filling","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"27-01-2012","tags":{"0":"cook22","1":"medium","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKFILL","time":{"view_start_date":1337541120,"submit_start_date":1337541120,"visible_start_date":1337541120,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>

<p>The Little Elephant has the string <b>S</b> such that each character in <b>S</b> is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>. He can replace each question mark with one of the lucky digits in order to obtain the lucky string. He wants to know the number of different ways he can do this such that the resulting lucky string has no more than <b>K</b> different substrings. Help him and find this number. Note, that <b>he need to replace all question marks.</b>

<p>Consider some example. From the string <b>47?4?</b> we can obtain four lucky strings by replacing question marks with the lucky digits: <b>47444</b>, <b>47447</b>, <b>47744</b> and <b>47747</b>. The corresponding numbers of different substrings are <b>11</b>, <b>11</b>, <b>12</b> and <b>11</b>. For example, all different substrings of the string <b>47447</b> are <b>4</b>, <b>7</b>, <b>44</b>, <b>47</b>, <b>74</b>, <b>447</b>, <b>474</b>, <b>744</b>, <b>4744</b>, <b>7447</b> and <b>47447</b>.

<p><b>Notes.</b></p>

Let <b>S</b> be some lucky string. Then

<ul>

<li><b>|S|</b> denotes the length of the string <b>S</b>;

<li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);

<li>The string <b>T</b> of the length <b>M</b> is called a <i>substring</i> of <b>S</b> if for some <b>k</b> from <b>0</b> to <b>|S| - M</b> we have <br>
<center><b>T[1] = S[k + 1], T[2] = S[k + 2], ..., T[M] = S[k + M]</b>.</center>

</ul>

<h3>Input</h3>
<p>The first line of the input file contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>. The second line contains the string <b>S</b> of the length <b>N</b>.

<h3>Output</h3>
<p> For each test case output a single line containing the answer for the corresponding test case.

<h3>Constraints</h3>
<p> 1 ≤ <b>T</b> ≤ 4747 </p>
<p> 1 ≤ <b>N, K</b> ≤ 50 </p>
<p> For each string <b>S</b> from the input file we have that <b>|S| = N</b> and each character in <b>S</b> is either the lucky digit (<b>4</b> or <b>7</b>) or the question mark <b>?</b>.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
2 2
??
3 7
?4?

<b>Output:</b>
2
4

</pre>
