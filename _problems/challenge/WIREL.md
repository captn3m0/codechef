---
{"category_name":"challenge","problem_code":"WIREL","problem_name":"Wireless Electricity (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/qFw1yBhua98","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"20-02-2021","tags":{"0":"alei","1":"geometry","2":"heuristic","3":"march21","4":"tie"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WIREL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WIREL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/WIREL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/WIREL.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/WIREL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/WIREL.pdf) as well.

Ada is in charge of upgrading Chefland's electrical network — she is implementing wireless electricity!

For simplicity, let's consider Chefland a two-dimensional world, where the cities are represented by points on a plane and electric wires (which are not necessarily connecting the cities) are represented by straight line segments.

There are $N$ cities in Chefland (numbered $1$ through $N$) and $M$ wires (numbered $1$ through $M$). For each valid $i$, the position of the $i$-th city is $(X_i, Y_i)$. Also, for each valid $i$, the $i$-th wire is a line segment with endpoints $(A_i, B_i)$ and $(C_i, D_i)$ initially.

In order to transmit power, Ada built two plates (line segments): the *positive plate*, which has endpoints $(-1, 0)$ and $(0, -1)$, and the *negative plate*, which has endpoints $(10^6+1, 10^6)$ and $(10^6, 10^6 + 1)$.

A wire is *positive* if it intersects the positive plate or intersects another wire about which we already know that it is positive. Similarly, a wire is *negative* if it intersects the negative plate or another negative wire. It is not allowed for any wire to be both positive and negative, because that creates a short-circuit.

For each valid $i$, let $S_i$ be the minimum of distances of the $i$-th city from endpoints of positive wires, and let $T_i$ be the minimum of its distances from endpoints of negative wires. Then, the cost of transmitting electricity to the $i$-th city is $S_i^2 + T_i^2$. Let $P$ be the sum of these costs over all cities.

You are allowed to move the wires, but not to rotate them. For each valid $i$, the cost of moving the $i$-th segment by $h_i$ units horizontally and $v_i$ units vertically from its original position is $h_i^2 + v_i^2$. After such a move, the endpoints of the segment become $(A_i + h_i, B_i + v_i)$ and $(C_i + h_i,  D_i + v_i)$. Let $Q$ be the sum of costs of moving all the wires.

Your goal is to move the wires and make $P + Q$ as small as possible. In the final network of wires, there should be at least one positive wire, at least one negative wire, and no wire should be both positive and negative. However, it is allowed to have some wires that are neither positive nor negative.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.
- $M$ more lines follow. For each valid $i$, the $i$-th of these lines contains four space-separated integers $A_i$, $B_i$, $C_i$ and $D_i$.

### Output
Print $M$ lines. For each valid $i$, the $i$-th of these lines should contain two space-separated integers $h_i$ and $v_i$ denoting that the $i$-th wire is moved by $h_i$ ($|h_i| \leq 10^6$) units horizontally and by $v_i$ ($|v_i| \leq 10^6$) units vertically.

### Example Input
```
4 4
1 1
2 2
3 3
4 4
0 0 4 2
3 5 4 2
4 5 2 4
1 5 3 2
```

### Example Output
```
-1 0
-1 0
-1 1
2 0
```
	
### Explanation
The following figure shows the cities $\mathsf{A}$, $\mathsf{B}$, $\mathsf{C}$ and $\mathsf{D}$, the positive plate $\mathsf{EF}$, negative plate $\mathsf{GH}$ and the wires $\mathsf{IJ}$, $\mathsf{KL}$, $\mathsf{MN}$ and $\mathsf{OP}$. Note that the negative plate is drawn closer for clarity.

<img src='https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/WIREL/WIREL0.png' width="400"></img>

The following figure describes the state after moving the wires.

<img src='https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/WIREL/WIREL.png' width="400"></img>

### Test Generation
The source code used to generate test data can be downloaded [here](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/WIREL/generator_public.cpp).

- $N = 10^4$
- $M = 2500$
- all coordinates of the $N$ cities are chosen uniformly randomly and independently among integers between $0$ and $10^6$ inclusive
- for each valid $i$, $X_i$ and $Y_i$ are chosen uniformly randomly and independently among integers between $0$ and $10^6$ inclusive
- a parameter $L$ is chosen: $L$ can be $8,000$, $10,000$, $12,000$, $14,000$ or $16,000$
- For each $i$ from $1$ to $M$:
    - two integers $h_i$ and $v_i$ different than zero are chosen uniformly randomly and independently between $-L$ and $L$ inclusive
    - $A_i$ is chosen uniformly randomly among integers between $\max(0, -h_i)$ and $\min(10^6, 10^6 - h_i)$ inclusive
    - $B_i$ is chosen uniformly randomly among integers between $\max(0, -v_i)$ and $\min(10^6, 10^6 - v_i)$ inclusive
    - $C_i = A_i + h_i$
    - $D_i = B_i + v_i$

There are two test files for each possible value of $L$.

### Scoring
The source code used to determine the score of your solution can be downloaded [here](https://s3.amazonaws.com/codechef_shared/download/Images/MARCH21/WIREL/checker_public.cpp).

If your output is invalid, in particular if there is no positive wire, no negative wire, or if some wire is declared both positive and negative, you will receive the Wrong Answer verdict.

The score for each test case (and therefore each test file) is $P + Q$. The score of a submission is equal to the sum of its scores over all test cases. Your goal is to minimise the score of your submission.

There are 10 test files. During the contest, the displayed score will account for exactly 5 test files, i.e. your score reflects your submission's performance on 50% (5/10) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 5 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>