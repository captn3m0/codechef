---
{"category_name":"easy","problem_code":"FLAGS","problem_name":"Counting Flags","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"rustinpiece","date_added":"31-05-2014","tags":{"0":"combinatorics","1":"cook47","2":"easy","3":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/FLAGS","time":{"view_start_date":1403464500,"submit_start_date":1403464500,"visible_start_date":1403464500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/FLAGS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/FLAGS.pdf">Russian</a> as well.</h3>
<p>
Mike is a famous traveler. He visits about 100 countries a year and buys the flag of each country he has been to.
</p>
<p>
Mike knows, that there are some flags, that correspond to one pattern, but colored in different ways. E.g. the flag of Ireland(<a href="http://en.wikipedia.org/wiki/File:Flag_of_Ireland.svg">link</a>) and the flag of Belgium(<a href="http://en.wikipedia.org/wiki/File:Flag_of_Belgium.svg">link</a>). In this problem we consider only <b>five</b> 2,2cm✕1,1cm patterns of flags:
</p>
<p>
<img src="/download/extimages/e0a288110c029176f586f6eac23b4546.jpg" width=500 />
</p>
<p>
There are <b>N</b> different colors available to paint the flags and the colors are denoted by integers from 1 to <b>N</b>.<br />
Mike wants you to count the number of different well-painted flags. We call a flag well-painted if it's made according to the following algorithm:
</p>
<p><ul>
<li>Pick up one of the flag patterns considered above;
</li><li>Paint each one-colored polygon on the pattern in a color encoded by an integer from <b>1</b> to <b>N</b>. Different colors are encoded with different integers. If two different one-colored polygons share a common side(not corner), than they must be painted in different colors. In any other case they can be painted in both equal and different colors.
</li></ul>
</p>
<p>
Two flags are different, if they look different(have at least one pixel painted with different color).
</p>
<p>
Help Mike!
</p>
<h3>Input</h3>
<p>The first line of the input contains integer <b>T</b>, denoting the number of testcases. The description of <b>T</b> testcases follows.</p>
<p>The only line of each test case contains integer <b>N</b>, denoting the number of different colors, that can be used while painting a flag pattern.</p>
<p> </p>
<h3>Output</h3>
<p>For each testcase, output a single line containing an integer - the answer for the corresponding query.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10 000;</p>
<p>1 ≤ <b>N</b> ≤ 10 000 for each testcase.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2
3

<b>Output:</b>
0
4
42
</pre><h3>Explanations:</h3>
<p>
There are <b>four</b> different well-painted flags for <b>N</b> = 2 different colors :
</p>
<p>
<img src="/download/extimages/57c2f54761cda108c18bd840f4638fda.jpg" width=500 />
</p>
<h3>Text version of the pictures: </h3>
<p><b>Picture 1</b></p>
<p>
112233<br /><br />
112233<br /><br />
112233
</p>
<p>
111111<br /><br />
222222<br /><br />
333333
</p>
<p>
112222<br /><br />
112222<br /><br />
113333
</p>
<p>
122223<br /><br />
111333<br /><br />
144443
</p>
<p>
111222<br /><br />
333222<br /><br />
333444
</p>
<p><b>Picture 2</b></p>
<p>
112211<br /><br />
112211<br /><br />
112211
</p>
<p>
221122<br /><br />
221122<br /><br />
221122
</p>
<p>
111111<br /><br />
222222<br /><br />
111111
</p>
<p>
222222<br /><br />
111111<br /><br />
222222
</p>

