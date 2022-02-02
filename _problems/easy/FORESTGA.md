---
{"category_name":"easy","problem_code":"FORESTGA","problem_name":"Forest Gathering","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"kevinsogo","date_added":"20-02-2016","tags":{"0":"binary","1":"cenadar","2":"easy","3":"may16"},"editorial_url":"http://discuss.codechef.com/problems/FORESTGA","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/FORESTGA.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/FORESTGA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/FORESTGA.pdf">Vietnamese</a> as well.</h3>
<p>Chef is the head of commercial logging industry that recently bought a farm containing <b>N</b> trees. You are given initial height of the i-th tree by <b>H<sub>i</sub></b> and the rate of growth of height as <b>R<sub>i</sub></b> meters per month. For simplicity, you can assume that all the trees are perfect cylinders of equal radius. This allows us to consider only the height of trees when we talk about the amount of wood.
</p>
<p>
In Chef's country, laws don't allow one to cut a tree partially, so one has to cut the tree completely for gathering wood. Also, laws prohibit cutting trees of heights (strictly) lower than <b>L</b> meters.
</p>
<p>
Today Chef received an order of <b>W</b> meters (of height) of wood. Chef wants to deliver this order as soon as possible. Find out how minimum number of months he should wait after which he will able to fulfill the order. You can assume that Chef's company's sawing machines are very efficient and take negligible amount of time to cut the trees.
</p>
<h3>Input</h3>
<p>There is a single test case per test file.</p>
<p>The first line of the input contains three space separated integers <b>N</b>, <b>W</b> and <b>L</b> denoting the number of trees in the farm, the amount of wood (in meters) that have to be gathered and the minimum allowed height of the tree to cut.</p>
<p>Each of next <b>N</b> lines contain two space separated integers denoting <b>H<sub>i</sub></b> and <b>R<sub>i</sub></b> respectively.</p>
<h3>Output</h3>
<p>Output a single integer denoting the number of months that have to pass before Chef will be able to fulfill the order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>W</b>, <b>L</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>H<sub>i</sub></b>, <b>R<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [40 points]:</b> <b>1 ≤ </b> <b>N</b>, <b>W</b>, <b>L</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>Subtask #2 [60 points]:</b> No additional constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 74 51
2 2
5 7
2 9

<b>Output:</b>
7
</pre><h3>Explanation</h3>
<p>After <b>6</b> months, heights of each tree will be <b>14</b>, <b>47</b> and <b>56</b> respectively. Chef is allowed to cut only the third tree, sadly it is not enough to fulfill an order of 74 meters of wood.</p>
<p>After <b>7</b> months, heights of each tree will be <b>16</b>, <b>54</b> and <b>65</b> respectively. Now Chef is allowed to cut second and third trees. Cutting both of them would provide him <b>119</b> meters of wood, which is enough to fulfill the order. </p>
