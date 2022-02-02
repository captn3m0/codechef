---
{"category_name":"challenge","problem_code":"ADANTS","problem_name":"(Challenge) 300 IQ Ants","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"19-02-2020","tags":{"0":"alei","1":"challenge","2":"march20","3":"tmwilliamlin"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ADANTS","time":{"view_start_date":1112031000,"submit_start_date":1112031000,"visible_start_date":1112031000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ADANTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/ADANTS.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/ADANTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/ADANTS.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/ADANTS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/ADANTS.pdf) as well.

There are $N$ ants (numbered $1$ through $N$) in a plane. For simplicity, we will represent the ants by points. For each valid $i$, initially, the position of the $i$-th ant is $(X_i,Y_i)$.

Ada wants to gather all ants at a single point. In order to do that, she wants to give instructions to the ants. In each instruction:
- First, Ada chooses a simple convex polygon with $M$ vertices (numbered $1$ through $M$ clockwise) such that there is at least one ant in each of its vertices and no three of its vertices are collinear. The polygon may have area $0$, in which case it is a line segment with only two vertices.
- Then, for each $i$ from $1$ to $M-1$ (inclusive) in this order:
    - Let's denote the set of all ants currently standing at the $i$-th vertex by $A_i$. Also, let $B_i$ denote its subset that consists of all ants that were standing at this vertex when Ada chose this polygon.
    - Ada chooses an ant from the set $B_i$ (let's denote it by $c_i$) and tells this ant, together with all other ants from the set $A_i$, to move to the nearest point $P$ with integer coordinates (different from the $i$-th vertex) that belongs to the side of the polygon between vertices $i$ and $i+1$.
    - If the point $P$ already contains some other ants, then these ants and the ants from the set $A_i$ will never separate and they will move together from then on. In other words, whenever two ants $a$ and $b$ are at the same position and Ada tells ant $a$ to move, then ant $b$ will move together with ant $a$.

Ants are very intelligent creatures (with an IQ around 300), so they can easily perform this instruction. However, ants are lazy, so the sum of $M$ over all instructions must not exceed $5 \cdot 10^5$. Help Ada minimise the number of instructions she needs to give to the ants in order to gather them at a single point.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$ denoting the position of the $i$-th ant.

### Output
First, print a line containing a single integer $Q$ ― the number of instructions. Then, print $Q$ lines; each of these lines should describe one instruction in the format `M c_1 c_2 ... c_M`.

### Example Input
```
5
0 0
2 4
4 3
5 1
3 0
```

### Example Output
```
2
4 1 2 3 4
3 1 3 5
```

### Explanation
In the first instruction, ant A moves to the point $(1,2)$, then ant B moves to ant C, and then they move together to ant D.

<img src="https://codechef_shared.s3.amazonaws.com/download/MARCH20/ADANTS/ADANTS1.png"></img>

After the second instruction, the three ants end up at the point $(3,0)$.

<img src="https://codechef_shared.s3.amazonaws.com/download/MARCH20/ADANTS/ADANTS2.png"></img>

### Test generation and constraints
There are five test files.
- In test file 1, the ants are placed in a chessboard-like pattern, i.e. at all points $(x, y)$ such that $0 \le x,y \le 500$ and $x+y$ is even.
- In test file 2, the positions of the ants are generated in the following way:
    - Consider the square $S$ whose lower left corner is $(0,0)$ and upper right corner is $(2^{10}, 2^{10})$.
    - Repeat the following: Choose two points $P$ and $Q$ on the perimeter of $S$ uniformly randomly. Consider all points on the line segment $\mathsf{PQ}$ with integer coordinates that do not contain ants yet. Sort these points first by non-decreasing first coordinate and then by non-decreasing second coordinate. Add an ant at each of these points, in this order.
    - The process continues until we get $N = 2^{17}$ distinct points with ants.
- In test file 3, the positions of the ants are generated similarly to test file 2, but the points $P$ and $Q$ are always chosen uniformly randomly among all points inside or on the perimeter of the square $S$.
- In test files 4 and 5, the positions of the ants are $N = 2^{17}$ distinct points with coordinates chosen independently and uniformly randomly between $0$ and $2^{10}$ (inclusive).

### Scoring
If any of your instructions are invalid, the sum of $M$ over all instructions exceeds $5 \cdot 10^5$ or the ants are not gathered at a single point after performing all instructions, you will receive the Wrong Answer verdict. Otherwise, the score of a test file is the number of performed instuctions. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are five test files. During the contest, the displayed score will account for exactly 3 test files, i.e. your score reflects your submission's performance on 60% of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 2 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>