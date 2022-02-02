---
{"category_name":"easy","problem_code":"DUMPLING","problem_name":"Greatest Dumpling Fight","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rosyish","problem_tester":"laycurse","date_added":"3-03-2012","tags":{"0":"april12","1":"easy","2":"rosyish"},"editorial_url":"http://discuss.codechef.com/problems/DUMPLING","time":{"view_start_date":1334137590,"submit_start_date":1334137590,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Shifu and Chef Po are participating in the Greatest Dumpling Fight of 2012.
Of course, Masterchef Oogway has formed the rules of the fight.
</p>

<p>
There is a long horizontal rope of infinite length with a center point P.
Initially both Chef Shifu and Chef Po will stand on the center P of the rope facing each other.
Don't worry, the rope is thick enough to hold Chef Po and Chef Shifu at the same place and at the same time.
Chef Shifu can jump either <b>A</b> or <b>B</b> units to the left or right in one move.
Chef Po can jump either <b>C</b> or <b>D</b> units to the left or right in one move.
</p>

<p>
Masterchef Oogway wants to place exactly one dumpling on the rope such that
both Chef Shifu and Chef Po will be able to reach it independently in one or more moves.
Also the dumpling can be placed at most <b>K</b> units away from the center of the rope.
Masterchef Oogway will let you watch the fight if you can decide the number of possible positions on the rope to place the dumpling. 
</p>

<p>

</p><p>

<h3>Input</h3>
</p><p>
First line contains <b>T</b>, the number of test cases. Each of the next <b>T</b> lines contains five positive integers, <b>A B C D K</b>.
</p>

<p>
1&lt;=<b>T</b>&lt;=1000  
1&lt;=<b>A</b>,<b>B</b>,<b>C</b>,<b>D</b>,<b>K</b>&lt;=10^18 
</p>

<h3>Output</h3>
<p>For each test case, output on a newline, the number of possible positions to place the dumpling on the rope. 


<h3>Example</h3>

<pre>
<b>Input:</b>
3
2 4 3 6 7
1 2 4 5 1
10 12 3 9 16

<b>Output:</b>
3
3
5

<b>Explanation:</b>

For the second case,

Chef Po jumps 2 units to the right and then 1 unit to the left.
Chef Shifu jumps 5 units to the right and then 4 units to the left 
to reach 1 unit right from the center.

Chef Po jumps 2 units to the left and then 1 unit to the right.
Chef Shifu jumps 5 units to the left and then 4 units to the right 
to reach 1 unit left from the center.

Dumpling can also be placed at the center as a chef can reach it in 2 moves.
Thus, there are three different positions at most 1 unit away from the center 
that are reachable by both the chefs in one or more moves.


</pre></p>