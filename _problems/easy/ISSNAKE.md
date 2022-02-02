---
{"category_name":"easy","problem_code":"ISSNAKE","problem_name":"Is It a Snake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"26-05-2017","tags":{"0":"admin2","1":"dfs","2":"easy","3":"snackdown","4":"snckpa17"},"editorial_url":"https://discuss.codechef.com/problems/ISSNAKE","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/ISSNAKE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/ISSNAKE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/ISSNAKE.pdf">Vietnamese</a> as well.</h3>

<p>One day I was visiting a temple in which snakes were worshiped. I happened to find a golden plate of dimension 2 * <b>n</b> in it. It had 2 rows of <b>n</b> cells each, and so the total number of cells is 2 * <b>n</b>. Each cell of the plate was either white or black, denoted by '.' and '#' respectively. Legend says that a snake was lying on this plate for many years and prayed. So, the cells that were covered by its body have turned black, the rest of the cells were white. Its entire body was supposedly on this plate. Also,
 you know that a snake likes to make itself comfortable, so none of its parts will be intersecting with its other parts.</p>

<p>
Usually, I am skeptical of such legends. So, I want to check for myself whether the legend could potentially be true or not. For example, consider the golden plate given below:

<pre><tt>
##
##
</tt></pre>
<p></p>
Now, the legend could be true. A snake can be on it, and one possible configuration is as follows. The head of the snake is at (1, 1), then the next portion at (1, 2), then at (2, 2) and then the finally the tail at (2, 1). Notice that the parts of the snake can be adjacent only if the corresponding cells have a common side.
</p>

<pre><tt>
##.#..
.###..
</tt></pre>

<p>There can be a snake on the plate above. </p>

<pre><tt>
##.##
.#.#.
</tt></pre>

<p>
The legend is surely false if the plate is as above. These are not marks of a single snake. There could be more than one possible snakes here. But not a single snake.
</p>

<p>Given the description of the plate, figure out if the legend could be true, or if it is definitely false.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>n</b>.</p>
<p>The next two lines each contain <b>n</b> characters denoting the rows of the plate.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing "yes" or "no" (without quotes) corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 500</li>
<li>1 ≤ <b>n</b> ≤ 500</li>
<li>There will be at least one cell containing the character '#'</li>
</ul>

<h3>Example</h3>
<pre><tt>
<b>Input</b>
6
2
##
..
2
##
.#
2
#.
.#
7
#.###..
#######
6
##.#..
.###..
5
##.##
.#.#.

<b>Output</b>
yes
yes
no
no
yes
no
</tt></pre>
