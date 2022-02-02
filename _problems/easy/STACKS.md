---
{"category_name":"easy","problem_code":"STACKS","problem_name":"Stacks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"shangjingbo","date_added":"11-09-2015","tags":{"0":"binary","1":"cook62","2":"kostya_by","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/STACKS","time":{"view_start_date":1442773782,"submit_start_date":1442773782,"visible_start_date":1442773800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/mandarin/STACKS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK62/russian/STACKS.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>
As every other little boy, Mike has a favorite toy to play with. Mike's favorite toy is a set of <b>N</b> disks. The boy likes to compose his disks in stacks, but there's one very important rule: the disks in a single stack must be ordered by their radiuses in a <b>strictly</b> increasing order such that the top-most disk will have the smallest radius.
</p>
<p>
For example, a stack of disks with radii (5, 2, 1) is valid, while a stack of disks with radii (3, 4, 1) is not.
</p>
<p>
Little Mike has recently come up with the following algorithm after the order of disks are given:
</p>
<p><ul>
<li>First, Mike initiates an empty set of disk stacks.
</li><li>Then, Mike processes the disks in the chosen order using the following pattern:
<ul>
<li>If there is at least one stack such that Mike can put the current disk on the top of the stack without making it invalid, then he chooses the stack with the smallest top disk radius <b>strictly</b> greater than the radius of the current disk, and puts the current disk on top of that stack.
</li><li>Otherwise, Mike makes a new stack containing only the current disk.
	</li></ul>
</li></ul>
</p>
<p>
For example, let's assume that the order of the disk radii is (3, 4, 5, 1, 1, 2). Here's how the set of the top stack disks will appear during the algorithm's run:
</p>
<p><ul>
<li>In the beginning of the algorithm, the set of disk stacks is empty. After processing the first disk, the set of top stack disks is {3}.
</li><li>We cannot put the second disk on the only stack that we have after processing the first disk, so we make a new stack. After processing the second disk, the set of top stack disks is {3, 4}.
</li><li>We cannot put the third disk on any of the available stacks, so we make a new stack. After processing the third disk, the set of top stack disks is {3, 4, 5}.
</li><li>The fourth disk has radius 1, so it can be easily put on any of the available stacks. According to the algorithm, we choose the stack with the top disk radius equal to 3. After processing the fourth disk, the set of top stack disks is {1, 4, 5}.
</li><li>The fifth disk has radius 1, so there are two stacks we can put it on. According to the algorithm, we choose the stack with the top disk radius equal to 4. After processing the fifth disk, the set of top stack disks is {1, 1, 5}.
</li><li>The sixth disk has radius 2, so there is only one stack we can put it on. The final set of top stack disks is {1, 1, 2}.
</li></ul>
</p>
<p>
Mike is really excited about his new algorithm, but he has so many disks that it seems impossible to simulate the algorithm manually.
</p>
<p>
You are given an array <b>A</b> of <b>N</b> integers denoting the radii of Mike's disks. The disks are already ordered by Mike. Your task is to find the set of the stack top disk radii after the algorithm is done.
</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
The first line of a test description contains a single integer <b>N</b>.
</p>
<p>
The second line of the description contains <b>N</b> integers denoting <b>A<sub>1</sub>, ... , A<sub>N</sub></b>.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line. The line should start with a positive integer <b>S</b> denoting the number of stacks after the algorithm is done. This should be followed by <b>S</b> integers on the same line denoting the stacks' top disk radii in <b>non-decreasing order</b>.
</p>
<p>
If there are multiple correct answers, you are allowed to output any of them.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
6
3 4 5 1 1 2
10
3 2 9 5 2 9 4 14 7 10
8
14 5 13 19 17 10 18 12

<b>Output:</b>
3 1 1 2
5 2 2 4 7 10 
4 5 10 12 18 
</pre><h3>Explanation</h3>
<p><b>Example 1</b> is already explained in the problem statement.</p>
