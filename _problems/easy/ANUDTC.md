---
{"category_name":"easy","problem_code":"ANUDTC","problem_name":"Divide the Cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"gerald","date_added":"13-04-2014","tags":{"0":"ad","1":"anudeep2011","2":"cakewalk","3":"cook46"},"editorial_url":"http://discuss.codechef.com/problems/ANUDTC","time":{"view_start_date":1400437800,"submit_start_date":1400437800,"visible_start_date":1400437800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUDTC.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUDTC.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>Chef loves circular cakes. He divides them into smaller pieces and sells them. You are to help him in this work.</p>
<p>Today Chef has cooked the brand new circular cake. To split the cake Chef can make several (possibly, zero) cuts. Each cut should be a straight line going from the center of the cake to its border. Also, the angle between any two cuts should have positive integer value (Chef measure all the angles in degrees). Chef consider two pieces of cake equal if the appropriate angles are equal.</p>
<p><img src = "http://codechef.com/download/Sector_central_angle_arc.svg" height="160" /><br/></br/></p>
<p>The picture contains two distinct pieces, and two cuts. Red part on the image shows one piece. The appropriate angle is <b>AOB</b>.</p>
<p>Chef gives to you an integer <b>N</b>, denoting the number of pieces Chef wants to make. You need to answer the following questions:</p>
<ul>
<li>Is it possible to make exactly <b>N</b> equal pieces from the whole cake?</li>
<li>Is it possible to make exactly <b>N</b> pieces from the whole cake?</li>
<li>Is it possible to make exactly <b>N</b> pieces from the whole cake, in such a way that no two of them are equal?</li>
</ul>
<p><br/></br/></p>
<h3>Input</h3>
<p>First line contains a single integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain a single integer <b>N</b> denoting the number of pieces Chef wants to make.</p>
<h3>Output</h3>
<p>For each test case, output one line containing 3 space separated characters.<br />
Above, we defined the 3 questions that Chef will ask. Output <b>'y'</b> for yes or <b>'n'</b> for no (quotes for clarity) for each of those questions.<br />
Answers for 3 questions (in the order above) must be space separated on the same line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
7

<b>Output:</b>
y y y
n y y
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
Is it possible to make <b>N</b> equal pieces?<br/><br />
Yes, you can cut 4 pieces each with 90 degrees angle.<br/><br />
Is it possible to make <b>N</b> pieces?<br/><br />
Yes, you can cut 4 pieces each with 90 degrees angle.<br/><br />
Is it possible to make <b>N</b> pieces, such that no two of them are equal?<br/><br />
Yes, you can cut 4 pieces with angles 88, 89, 91, 92.<br/>
</br/></br/></br/></br/></br/></br/></br/></p>
