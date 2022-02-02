---
{"category_name":"easy","problem_code":"HX","problem_name":"Forces in the crystal","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"PERL6","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":"1.73209 - 2.59814","source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"22-09-2009","tags":{"0":"admin"},"time":{"view_start_date":1255253400,"submit_start_date":1255253400,"visible_start_date":1255253400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Suppose that we have a crystalline triangular grid of atoms. Atoms are arranged on a regular grid, and each atom has six neighbors (unless it lies on the boundary of crystal). Each atom has an electric charge of <var>q</var>, and can be polarized in only one of two directions: up or down (the laws of physics in Byteland are somewhat surprising!). If two atoms are neighbors and share the same polarization, then a destructive force against the crystal occurs, whose value is equal to <var>q<sub>1</sub></var>*<var>q<sub>2</sub></var>. We can choose the polarization for each atom, and we would like to minimize total force working against the crystal, i.e., the sum of values of all the individual forces.</p>
<h3>Input</h3>
<p>First, 1000≤<var>n</var>≤2000, the size of input. Then <var>n</var> lines with <var>n</var> numbers in each follow. In the x-th line, 1≤<var>x</var>≤<var>n</var>, the y-th number, 1≤<var>y</var>≤<var>n</var>, is the charge of the atom with coordinates in the crystal equal to <var>(x,y)</var> if <var>x</var> is odd, <var>(x,y+1/2)</var> otherwise. For any atom at coordinates <var>(x,y)</var>, the coordinates of the neighbors are assumed to be the following (as long as they appear in the crystal): <var>(x-1,y-1/2),(x-1,y+1/2),(x,y-1),(x,y+1),(x+1,y-1/2),(x+1,y+1/2)</var>. Each charge <var>q</var> is in the range 0.1≤<var>q</var>≤1.</p>
<h3>Output</h3>
<p>For each atom given at input, output <em>0</em> or <em>1</em> depending on whether the polarization of the atom should be directed up or down.</p>
<h3>Score</h3>
The score of your program is equal to the value of the force acting on the crystal. The program is tested multiple times for different data sets, and the results are averaged.
<h3>Example</h3>
<pre><strong>Input:</strong>
3
1 2 3
4 5 6
7 8 9

<strong>Output:</strong>
0 0 0
0 0 0
0 0 1

<strong>Score:</strong>
269 = (1*2+1*4+2*3+2*5+2*4+3*6+3*5+4*5+4*7+4*8+5*6+5*8+7*8)
</pre>
