---
{"category_name":"medium","problem_code":"ANDOOR","problem_name":"A New Door","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"anton_lunyov","date_added":"9-08-2012","tags":{"0":"geometry","1":"jan13","2":"medium","3":"precision","4":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/ANDOOR","time":{"view_start_date":1358247831,"submit_start_date":1358247831,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Now Chef is very good in cooking; his dishes are the best in the city, so he wants to make his restaurant prettier. The first, what customer sees, when comes to his restaurant is the door. So he will start with it. He has found a new design last night. Hi will cut out some circles from the door and fill the holes by the glass to make windows of peculiar form.</p>
<p>Formally, we can model the process Chef will perform to create the windows as follows. Let the door be a rectangle at the coordinate plane with corners at the points <b>(0, 0)</b>, <b>(W, 0)</b>, <b>(0, H)</b>, <b>(W, H)</b>. Initially the door is colored white, while the remaining part of the coordinate plane is colored black. At each step Chef colors in black some circle including all its inner points. After Chef will color all required circles, the black part of the door (that is, black regions that lie in the rectangle corresponding to the door) is cut out and replaced by the glass.</p>
<p>The main measure of peculiarity of the door is the perimeter of all the windows considering only those parts of windows borders lying inside the door (see example case 2 for clarity). Chef is very tired after coloring so many circles and asks you to find this number.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains 3 space-separated integers <b>W, H, N</b>, denoting the measurements of the door, and the number of circles. The description of <b>N</b> circles follows in the next <b>N</b> lines. Namely, the <b>i</b>-th line among them contains <b>3</b> space-separated real numbers <b>X</b>, <b>Y</b>, <b>R</b> with exactly two digits after the decimal point, denoting the coordinates of the center and the radius of the circle that Chef will cut out at the <b>i</b>-th step.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the sum of the perimeters of all windows as described above. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>W</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>H</b> &le; <b>1000</b></li>
<li><b>1</b> &le; <b>N</b> &le; <b>1000</b></li>
<li>The sum of all values of <b>N</b> over the input does not exceed <b>5000</b></li>
<li><b>0</b> &lt; <b>R</b> &le; <b>1000</b></li>
<li><b>0</b> &le; <b>X</b>, <b>Y</b> &le; <b>1000</b></li>
<li><b>X</b>, <b>Y</b>, <b>R</b> have exactly two digits after the decimal point</li>
<li>All circles are different, that is, every two circles have either different radii or different centers (or both)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
8 10 8
2.00 2.00 1.00
4.00 2.00 0.50
6.00 2.00 1.00
4.00 5.00 1.50
3.00 6.00 0.50
3.00 7.00 0.75
5.00 7.00 1.00
4.00 8.00 1.00
7 7 3
1.00 1.00 2.00
3.00 3.00 1.50
6.00 5.00 1.50

<b>Output:</b>
33.6404284
17.2058395
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The answer is the length of the bold lines on the following picture:</p>
<p><img src="http://www.codechef.com/download/ANDOOR_Ex2.jpg" /></p>
<p><b>Example case 2.</b> The answer is the length of the bold lines on the following picture:</p>
<p><img src="http://www.codechef.com/download/ANDOOR_Ex1.jpg" /></p>
