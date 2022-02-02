---
{"category_name":"hard","problem_code":"MULHANOI","problem_name":"Again Multi-Peg Tower of Hanoi","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"19-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>In CSE courses we frequently cite the Tower of Hanoi problem to make the concept of recursive procedures clear. In an ordinary Tower of Hanoi problem there are three pegs $S_1, S_2$, and $S_3$. Initially, circular disks with holes are mounted on $S_1$ with smaller disks on top of larger ones. All the disks are of different diameters. The task is to shift all the disks to $S_3$, always shifting one disk from top of a tower to top of another tower, and never ever placing a larger disk on top of a smaller one. To solve the problem of $n$ disks one is forced to shift the top ($n-1$) disks from $S_1$ to the only intermediate peg $S_2$, then shift the largest disk from $S_1$ to $S_3$, and finally shift the remaining ($n-1$) disks from $S_2$ to $S_3$, without violating the aforementioned constraints.
 
But in a Multi-peg Tower of Hanoi problem with $p \ge 3$ pegs, we have ($p-2$) intermediate pegs. The problem is to shift the disks from the source peg to the destination peg in minimum number of moves. There is a **presumed optimal strategy** that asserts that:
- A certain optimal number of disks ($n_1$) should be shifted to an intermediate peg $S_i$.
- The remaining ($n-n_1$) disks should reach the destination without using the peg $S_i$, that is using only ($p-1$) pegs. 
- Disks on $S_i$ must now reach the destination using all  $p$ pegs. 

You have to figure out what $n_1$ you need to choose at every step to minimize the total number of steps. And among all such strategies for $n$ disks and $p$ pegs, let the maximum number of moves a disk requires to reach the destination peg be $k$ (i.e., some of the disks require less than $k$ moves while some of the disks need exactly $k$ moves). Given $n$ and $p$, we are interested to know the maximum number of disks each of which requires exactly $k$ moves to reach the destination.

###Input
- For every problem instance, there will be a single line containing two space separated integers $n$, $p$ ($1 \leq n \leq 100$ and $3 \leq p \leq 10$).
- Input ends with $n = 0, p=0$. 
- There will not be more than 1000 instances.

###Output
- For every problem instance, print in a separate line the maximum number of disks each of which requires the maximum number of moves to reach the destination. 

###Sample Input
```
7 3
10 4
0 0 
```

###Sample Output
```
1
4
```