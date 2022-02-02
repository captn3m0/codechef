---
{"category_name":"challenge","problem_code":"RECTARAN","problem_name":"Moving Rectangles (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"taran_1407","problem_tester":null,"date_added":"3-04-2019","tags":{"0":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/RECTARAN","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/RECTARAN.pdf) and [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/RECTARAN.pdf)

Taran and Birju Pandey are good friends. In order to solidify their friendship, Taran sent Birju another challenge problem and asked him to find the best solution. Birju is good at writing stories as well as solving problems, but he is unable to solve this problem. Birju is worried that if he does not solve the problem, Taran might forget their friendship and unleash another war, deadlier than the [last one](https://www.codechef.com/problems/WARTARAN). Therefore, he is asking you for help with this problem.

**This is an interactive problem.**

There are $N$ rectangles (numbered $1$ through $N$) in a plane described by Cartesian coordinates $x$ and $y$. Initially (at time $0$), each rectangle is moving parallel to one of the coordinate axes with fixed speed $1$ unit per second. You are given the width, height and position of each rectangle, as well as the direction in which it is initially moving.

You must repeat the following process $N$ times:
- Read a string $S$ given by the grader. This string is either "REVERSE" or "ROTATE" and describes the operation you should perform on one rectangle. **These operations are applied in chronological order, i.e. the current operation is applied after all the previous operations have already been applied.**
- Choose one rectangle on which this operation should be applied. Let's denote the number of this rectangle by $r$.
- Choose the second $s$ (between $1$ and $N$ inclusive) during which this operation should be applied. If an operation is applied during the $s$-th second, it means that is applied strictly between time $s-1$ and time $s$. Since the operations must be performed in chronological order, you may only choose the $s$-th second if all previous operations have been applied during the $1$-st through $s$-th second (inclusive).
- If $S$ is "REVERSE", then during the $s$-th second, the direction in which the $r$-th rectangle is currently moving is reversed — it is changed from North to South, from South to North, from West to East or from East to West.
- If $S$ is "ROTATE", then during the $s$-th second, the direction in which the $r$-th rectangle is currently moving is rotated by $90^\circ$. You must choose the new direction $dir$ for this rectangle's velocity. From North to South, you may change the direction to East or West (but not to North or South), and vice versa.

The rectangles are moving in discrete steps — at the end of each second (after all the operations applied during this second are performed), each rectangle moves by $1$ unit in its currently assigned direction. The rectangles do not move at time $0$, but they move at time $N$.

Let's assign numbers and coordinates to directions in the following way:
- moving by $1$ unit in direction $0$ (North): the $y$-coordinate increases by $1$
- moving by $1$ unit in direction $1$ (East): the $x$-coordinate increases by $1$
- moving by $1$ unit in direction $2$ (South): the $y$-coordinate decreases by $1$
- moving by $1$ unit in direction $3$ (West): the $x$-coordinate decreases by $1$

After $N$ seconds (immediately after the rectangles moved at time $N$), consider the sum of common areas of each unordered pair of different rectangles, i.e. $A = \sum_{i=1}^N \sum_{j=i+1}^N \mathrm{area}(i, j)$ where $\mathrm{area}(x, y)$ denotes the common area, i.e. area of the intersection of rectangles $x$ and $y$.

Can we maximise $A$ if we apply the operations optimally? Good luck!

### Interaction
- First, your program should read a line containing a single integer ― the number of test cases $T$. The description of interaction for $T$ test cases follows.
- For each test case, you must start by reading a line containing a single integer $N$.
- Then, you must read $N$ lines. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contain five space-separated integers $v_x$, $v_y$, $d_x$, $d_y$ and $dir$ describing a rectangle with width $d_x$ and height $d_y$ moving in direction $dir$. The initial coordinates of this rectangle's vertices are $(v_x, v_y)$, $(v_x+d_x, v_y)$, $(v_x, v_y+d_y)$ and $(v_x+d_x, v_y+d_y)$.
- Then, you must perform the following process $N$ times:
    - Read a line containing a single string $S$.
    - If $S$ is "REVERSE", print a single line containing two space-separated integers $r$ and $s$ denoting that the current operation should be applied on the $r$-th rectangle during the $s$-th second.
    - If $S$ is "ROTATE", print a single line containing three space-separated integers $r$, $dir$ and $s$ denoting that the current operation should be applied on the $r$-th rectangle during the $s$-th second and the new direction of its velocity becomes $dir$.

Your output must satisfy the following conditions:
- $1 \le r, s \le N$
- $0 \le dir \le 3$

Don't forget to flush the output after printing each line! Otherwise, the grader will wait for your response forever and the verdict of your submission may be anything except Accepted (which you might not like).

### Test generation
In each test file, $T = 3$; also, integers $N$ and $MX$ are chosen manually. Then, for each rectangle:
- $v_x$ and $v_y$ are generated uniformly randomly between $0$ and $10^4$ inclusive
- $d_x$ and $d_y$ are generated uniformly randomly between $1$ and $MX$ inclusive
- $dir$ is generated uniformly randomly between $0$ and $3$ inclusive
- $S$ is generated uniformly randomly from the set {"ROTATE", "REVERSE"}

There are three types of tests:
- type 1: five test files with $N = 500$ and $MX = 1000$
- type 2: five test files with $N = 1000$ and $MX = 100$
- type 3: ten test files with $N = 1000$ and $MX = 1000$

### Scoring
The score of each test case is computed as $A \cdot 10^5 / (N^2 MX^2)$. The score of each test file is the sum of scores of all test cases in that file. The score of a submission is the sum of scores of all test files.

There are twenty test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4 out of 20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over the other sixteen test files.

### Example
```
Grader                          You
2
3
0 0 5 5 0
1 1 3 4 2
1 0 2 2 1
REVERSE
                                1 1
ROTATE
                                3 2 1
ROTATE
                                3 3 3
3
0 0 5 5 0
1 1 3 4 2
1 0 2 2 1
REVERSE
                                1 1
ROTATE
                                3 2 1
ROTATE
                                3 3 3
```

### Explanation
Both test cases are the same and they are given just to clarify how interaction works if there are multiple test cases.
