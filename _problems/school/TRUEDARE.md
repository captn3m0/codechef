---
{"category_name":"school","problem_code":"TRUEDARE","problem_name":"Truth and Dare","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-11-2018","tags":{"0":"admin2","1":"cakewalk","2":"cook100","3":"data","4":"sets","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TRUEDARE","time":{"view_start_date":1542565802,"submit_start_date":1542565802,"visible_start_date":1542565802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK100TST/hindi/TRUEDARE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK100TST/mandarin/TRUEDARE.pdf), [Russian](http://www.codechef.com/download/translated/CK100TST/russian/TRUEDARE.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK100TST/vietnamese/TRUEDARE.pdf) and [Bengali](http://www.codechef.com/download/translated/CK100TST/bengali/TRUEDARE.pdf) as well.

Ram and Shyam are playing a game of Truth and Dare. In this game, Shyam will ask Ram to perform tasks of two types:
- Truth task: Ram has to truthfully answer a question.
- Dare task: Ram has to perform a given task.

Each task is described by an integer. (If a truth task and a dare task are described by the same integer, they are still different tasks.) You are given four lists of tasks:
- $T_{r, 1}, T_{r, 2}, \dots, T_{r, t_r}$: the truth tasks Ram can perform.
- $D_{r, 1}, D_{r, 2}, \dots, D_{r, d_r}$: the dare tasks Ram can perform.
- $T_{s, 1}, T_{s, 2}, \dots, T_{s, t_s}$: the truth tasks Shyam can ask Ram to perform.
- $D_{s, 1}, D_{s, 2}, \dots, D_{s, d_s}$: the dare tasks Shyam can ask Ram to perform.

Note that the elements of these lists are not necessarily distinct, each task may be repeated any number of times in each list.

Shyam wins the game if he can find a task Ram cannot perform. Ram wins if he performs all tasks Shyam asks him to. Find the winner of the game.

Let's take an example where Ram can perform truth tasks $3$, $2$ and $5$ and dare tasks $2$ and $100$, and Shyam can give him truth tasks $2$ and $3$ and a dare task $100$. We can see that whichever truth or dare tasks Shyam asks Ram to perform, Ram can easily perform them, so he wins. However, if Shyam can give him dare tasks $3$ and $100$, then Ram will not be able to perform dare task $3$, so Shyam wins.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $t_r$.
- The second line contains $t_r$ space-separated integers $T_{r, 1}, T_{r, 2}, \dots, T_{r, t_r}$.
- The third line contains a single integer $d_r$.
- The fourth line contains $d_r$ space-separated integers $D_{r, 1}, D_{r, 2}, \dots, D_{r, d_r}$.
- The fifth line contains a single integer $t_s$.
- The sixth line contains $t_s$ space-separated integers $T_{s, 1}, T_{s, 2}, \dots, T_{s, t_s}$.
- The seventh line contains a single integer $d_s$.
- The eighth line contains $d_s$ space-separated integers $D_{s, 1}, D_{s, 2}, \dots, D_{s, d_s}$.

### Output
For each test case, print a single line containing the string `"yes"` if Ram wins the game or `"no"` otherwise.

### Constraints
- $1 \le T \le 100$
- $1 \le t_r, d_r, t_s, d_s \le 100$
- $1 \le T_{r, i} \le 100$ for each valid $i$
- $1 \le D_{r, i} \le 100$ for each valid $i$
- $1 \le T_{s, i} \le 100$ for each valid $i$
- $1 \le D_{s, i} \le 100$ for each valid $i$

### Example Input
```
4
2
1 2
3
1 3 2
1
2
2
3 2
2
1 2
3
1 3 2
1
2
3
3 2 4
3
3 2 5
2
2 100
1
2
1
100
2
1 2
3
1 3 2
1
2
3
3 2 2
```

### Example Output
```
yes
no
yes
yes
```

### Explanation
**Example case 1:** Ram's truth tasks are $[1, 2]$ and his dare tasks are $[1, 3, 2]$. Shyam's truth tasks are $[2]$ and his dare tasks are $[3, 2]$. Ram can perform all tasks Shyam gives him.

**Example case 2:** Ram's truth tasks are $[1, 2]$ and his dare tasks are $[1, 3, 2]$. Shyam's truth tasks are $[2]$ and his dare tasks are $[3, 2, 4]$. If Shyam asks Ram to perform dare task $4$, Ram will not be able to do it.
