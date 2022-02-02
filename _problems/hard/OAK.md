---
{"category_name":"hard","problem_code":"OAK","problem_name":"Persistent oak","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"16-09-2016","tags":{"0":"alex_2oo8"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/mandarin/OAK.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/OAK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/vietnamese/OAK.pdf">Vietnamese</a> as well.</h3>


<p>Chef has a huge and beautiful tree in his garden (an oak, not the kind of tree you just thought of), so quite often he just sits inside and looks at this wonderful oak through the window.</p>

<p>When observing the tree for a long time Chef sees that even an oak has a life. A bunch of cute green acorns may grow on some branches, which in turn may cause some branches to fall down due to not being able to hold all the weight. A bird may sit down on a branch causing all the acorns to fall down from this branch, from the branches growing out of this branch, and from all the branches growing out of them, and so on... In other words, it really looks like the oak is alive.</p>

<p>The tree has a trunk (once again, a wooden trunk is meant here) and <b>n</b> branches. Every branch grows either out of the trunk or out of another branch. We will say that branch <b>B</b> is below branch <b>A</b> if there exists a sequence of branches <b>C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>k</sub></b> such that <b>C<sub>1</sub> = A; C<sub>k</sub> = B</b> and <b>C<sub>i + 1</sub></b> grows out of <b>C<sub>i</sub></b> for all <b>1</b> ≤ <b>i</b> < <b>k</b>. Every branch has a maximum weight <b>w</b> it can hold ― in case a branch plus all the branches below it have more than <b>w</b> acorns overall, the branch (together with all the branches below it and all the acorns on them) falls down. The branch which falls is the 'deepest' branch. That is, once some acorns have grown on a branch, then, if this branch cannot handle the weight, it falls. Else, if the branch on which this branch grows cannot handle the weight, that branch falls, and so on. This happens sequentially, and so once a branch has fallen, none of the branches above it fall in the same moment, and at most one branch would fall after any particular event. Also, the trunk is super strong, and hence can carry any amount of weight.
 </p>

<p>Oh, and just one more thing ― the tree is <a href="https://en.wikipedia.org/wiki/Persistent_data_structure">persistent</a>, so it is quite hard for Chef to remember all the states of the oak, can you help him with this? Chef will tell you everything he notices about the tree, but you should answer what exactly the last event resulted into.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, the first line of input contains two integers <b>n</b> and <b>m</b> ― the number of branches the oak has and the number of events Chef has to tell you about. The branches are numbered from 1 to <b>n</b>.</p>
<p>The v-th of the following <b>n</b> lines contains <b>2</b> integers ― <b>p<sub>v</sub></b> and <b>w<sub>v</sub></b>. If <b>p<sub>v</sub> = 0</b>, then branch <b>v</b> grows out of the trunk, otherwise it grows out of branch <b>p<sub>v</sub></b>. <b>w<sub>v</sub></b> is the maximum weight branch <b>v</b> can hold.</p>
<p>The i-th of the following <b>m</b> lines describes the i-th event Chef has observed:</p>
<ul>
    <li>The first integer is <b>state</b> ― the state of the oak we are applying the new event to. <b>state = 0</b> means the state at the very beginning with no branches fallen and no acorns grown. <b>state > 0</b> means the state right after the event number <b>state</b></li>
    <li>The second integer is <b>q</b> ― the type of the event</li>
    <li>If <b>q = 1</b>, two integers <b>u</b> and <b>x</b> follow, meaning that <b>x</b> acorns have grown on the branch <b>u</b>. After this event some branch could have fallen, and if this is the case, output the number of this branch. Otherwise output <b>0</b></li>
    <li>If <b>q = 2</b>, an integer <b>u</b> follows meaning that a bird has sat down on the branch <b>u</b> and all the acorns from this branch and from all the branches below it have fallen. For this type of event Chef asks you to print the total number of acorns that have fallen</li>
</ul>

<h3>Output</h3>
<p>For each event print the value Chef asked you about on a separate line.</p>

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
    <li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>5</sup></b></li>
    <li><b>0</b> ≤ <b>p<sub>v</sub></b> < <b>v</b></li>
    <li><b>0</b> ≤ <b>w<sub>v</sub>, x</b> ≤ <b>10<sup>7</sup></b></li>
    <li><b>1</b> ≤ <b>u</b> ≤ <b>n</b></li>
    <li><b>0</b> ≤ <b>state</b> < <b>m</b></li>
</ul>
<p> </p>

<h3>Subtasks</h3>
<ul>
    <li>Subtask #1: <b>n, m</b> ≤ <b>100</b> (13 points)</li>
    <li>Subtask #2: The tree is not persistent, i.e. the <b>state</b> for event <b>i</b> will be equal <b>i - 1</b> (29 points) </li>
    <li>Subtask #3: There will be only events of type <b>1</b> (29 points)</li>
    <li>Subtask #4: No additional constraints (29 points)</li>
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 6
0 5
1 3
0 2
3 1
3 4
0 1 5 5
0 1 4 1
2 1 5 2
2 2 3
4 1 5 2
3 1 1 7

<b>Output:</b>
5
0
3
1
0
1
</pre>
<h3>Explanation</h3>
<p><b>Example event 1.</b> Branch <b>5</b> can hold at most <b>4</b> acorns, so after <b>5</b> have grown there, it immediately falls down. Notice that the branch <b>3</b> doesn't fall down (even though it also can't hold <b>5</b> acorns), because the branch <b>5</b> no longer grows out of it. We output <b>5</b> as this branch has fallen down and create a state of the oak with index <b>1</b> having branch <b>5</b> fallen and having no acorns in the other four branches.</p>

<p><b>Example event 2.</b> We take the state <b>0</b> as the base, so we once again have branch <b>5</b> on the tree. One acorn has grown at the branch <b>4</b>. No branch has fallen as every one can hold at least one acorn, thus we print <b>0</b>. Resulting state after this event (with index <b>2</b>) has all five branches and one acorn on branch <b>4</b>.</p>

<p><b>Example event 3.</b> We take the state <b>2</b> as the base, which is the resulting state after previous event. After two acorns have grown on the branch <b>5</b>, we have one acorn on branch <b>4</b> and two acorns on branch <b>5</b>. Both these branches are below branch <b>3</b> which can hold at most two acorns, so as a result branch <b>3</b> falls down. The resulting state (with index <b>3</b>) has only two branches left ― <b>1</b> and <b>2</b> with no acorns on them.</p>

<p><b>Example event 4.</b> We once again take the state <b>2</b> as the base, but this time remove all the acorns from branch <b>3</b> and from all the branches below it (<b>4</b> and <b>5</b>). Branch <b>5</b> had no acorns and branch <b>4</b> had one acorn on it (that has grown during event <b>2</b>), so we print <b>1</b> as the total number of acorns fallen. The resulting state (with index <b>4</b>) has the full tree (no branches have fallen) with no acorns. So, the state <b>4</b> is basically equivalent to the state <b>0</b>.</p>

<p><b>Example event 5.</b> This event is similar to event <b>3</b>. The only difference is that the base state (<b>4</b> for this event) doesn't contain any acorns. So branch <b>3</b> has only two acorns below it after this event and doesn't fall down.
</p>

<p><b>Example event 6.</b> We take state <b>3</b> as the base, it has only two branches ― <b>1</b> and <b>2</b> without any acorns. Seven acorns grow on the branch <b>1</b> causing this branch to fall down (as it can hold only up to <b>5</b> acorns). The resulting state after this event contains just plain trunk without a single branch (as a consequence it would be impossible to use this state in any future events as a base state).
</p>