---
{"category_name":"medium","problem_code":"CYLINDER","problem_name":"Cylinder","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"11-03-2013","tags":{"0":"anton_lunyov","1":"april13","2":"maths","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CYLINDER","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef wants to make a steel container. The container should be of cylindrical form and should have as large volume as possible. He has a rectangular steel sheet of the size <b>W &times; H</b> for this. His plan is the following:
<ul>
<li>At first he cuts the sheet into two rectangular sheets by horizontal or vertical cut.</li>
<li>Then he takes one of the obtained sheets and cuts out two equal non-overlapping circles from it. Let the radius of each circle be <b>R</b>.</li>
<li>Finally he cuts out the rectangular sheet of the size <b>2&pi;R &times; A</b> for maximal possible <b>A</b> from the second sheet, with sizes parallel to the sides of the second sheet. He will use it as a lateral surface of the container. Namely, he rolls up the obtained sheet along the side <b>2&pi;R</b> to obtain the lateral surface of cylinder.</li>
<li>Thus, Chef obtains the cylindrical container of height <b>A</b> and radius <b>R</b>, having bottom and top made from steel.</li>
</ul>
</p>
<p>
Chef is aware of your advanced math abilities and asks you for help to find the optimal container. Output the maximum volume of the container that could be achieved by the above scheme.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space-separated integers <b>W</b> and <b>H</b>.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the maximum volume of the container. Your answer will be considered as correct if it has a relative error less than <b>10<sup>&minus;11</sup></b>. More formally, if the correct output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if <b>|A &minus; B| &le; 10<sup>&minus;11</sup> * A</b>.
</p>
<h3>Constrains</h3>
<p>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>400000</b> (<b>4 * 10<sup>5</sup></b>)</li>
<li><b>1</b> &le; <b>W</b> &le; <b>999999</b> (<b>10<sup>6</sup> &minus; 1</b>)</li>
<li><b>1</b> &le; <b>H</b> &le; <b>999999</b> (<b>10<sup>6</sup> &minus; 1</b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 4
2 3
1 6

<b>Output:</b>
3.471819240663
0.824190535860
0.785398163397
</pre><h3>Explanation</h3>
<p>
In all examples blue circles are top and bottom of container. Yellow rectangle is used to create lateral surface. Namely, we roll up it along the direction of blue arrow to match green borders.</p>
<p><b>Example case 1:</b><br/><br />
<img src="//codechef.com/download/CYLINDER_Example1.png" width="30%" /><br/><br />
<b>R &cong; 0.63662, A &cong; 2.72676.</b></br/></br/></p>
<p><b>Example case 2:</b><br/><br />
<img src="//codechef.com/download/CYLINDER_Example2.png" width="20%" /><br/><br />
<b>R &cong; 0.36218, A = 2.</b></br/></br/></p>
<p><b>Example case 3:</b><br/><br />
<img src="//codechef.com/download/CYLINDER_Example3.png" width="40%" /><br /><br />
<b>R = 0.5, A = 1.</b></br/></p>
