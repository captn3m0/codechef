---
{"category_name":"medium","problem_code":"CHAOSEMP","problem_name":"Destroy the EMP Chip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/rVijKWnOW8I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jay_1048576","problem_tester":"","date_added":"19-03-2021","tags":{"0":"april21","1":"binary","2":"geometry","3":"interactive","4":"jay_1048576","5":"medium","6":"observation"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/CHAOSEMP","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHAOSEMP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/CHAOSEMP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/CHAOSEMP.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/CHAOSEMP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/CHAOSEMP.pdf) as well.

**This is an interactive problem.**

A mysterious organisation has stolen an EMP chip prototype from a high-tech US facility. IGI knows the consequences of the chip falling into the wrong hands. Since it is just a prototype, they wish to destroy it completely instead of attempting to retrieve it. The best opportunity to do so is when the chip is being transferred from one base to another in a secured truck.

The truck can move on an infinite two-dimensional plane. Initially, it is located at some point with integer coordinates $(H, K)$. Unfortunately, this point and the route the truck is going to follow are unknown.

To accomplish his task, David Jones can use two kinds of weapons with the following feedback systems:
1. Hellfire ― Launched towards a single point $(X, Y)$. Anything lying at this point is instantly destroyed. Let's denote the location of the truck at this point in time by $(A, B)$. Then, the feedback is one of the following strings:
    - "O" if $X = A$ and $Y = B$
    - "PY" if $X \gt A$ and $Y = B$
    - "NY" if $X \lt A$ and $Y = B$
    - "XP" if $X = A$ and $Y \gt B$
    - "XN" if $X = A$ and $Y \lt B$
    - "PP" if $X \gt A$ and $Y \gt B$
    - "PN" if $X \gt A$ and $Y \lt B$
    - "NP" if $X \lt A$ and $Y \gt B$
    - "NN" if $X \lt A$ and $Y \lt B$

2. Ring of Fire ― Applied on a rectangular region with a bottom left corner $(X_1, Y_1)$ and a top right corner $(X_2, Y_2)$. Anything lying on the perimeter of the rectangle gets instantly destroyed. Let's denote the location of the truck at this point in time by $(A, B)$. Then, the feedback is one of the following strings:
    - "O" if $(A, B)$ lies on the perimeter of the rectangle
    - "IN" if $(A, B)$ lies strictly inside the rectangle
    - "OUT" if $(A, B)$ lies outside the rectangle

In addition, if an attack is unsuccessful, the truck moves exactly $D$ units in one of the four possible axis-parallel directions, i.e. it moves from its current position $(A, B)$ to $(A+D, B)$ or $(A, B+D)$ or $(A-D, B)$ or $(A, B-D)$ (not necessarily the same direction for all unsuccessful attacks). The value of $D$ is fixed and known to be either $0$ (the truck does not move) or $1$.

Each weapon may be used multiple times and they may be used in any order. However, since using the weapons is costly, you may only make up to $Q$ attacks (with both types of weapons in total). Obviously, your task is to destroy the truck, i.e. to receive "O" as the feedback.

### Interaction
- First, you should read a line containing three space-separated integers $T$, $Q$ and $D$. You should solve $T$ test cases, each with the same parameters $Q$ and $D$. The description of interaction for $T$ test cases follows.
- For each test case, you may make up to $Q$ queries. For each query:
    - If you want to use a Hellfire attack, print a single line containing three space-separated integers $1$, $X$ and $Y$ ($-2 \cdot 10^{18} \leq X, Y \leq 2\cdot 10^{18}$).
    - If you want to use a Ring of Fire attack, print a single line containing five space-separated integers $2$, $X_1$, $Y_1$, $X_2$ and $Y_2$ ($-2 \cdot 10^{18} \leq X_1 \leq X_2 \leq 2 \cdot 10^{18}$ and $-2 \cdot 10^{18} \leq Y_1 \leq Y_2 \leq 2 \cdot 10^{18}$).
    - Then, you should read a single line containing one string. If you ask an invalid query or exceed the query limit, this string is "FAILED" and you should immediately terminate your program to receive the Wrong Answer verdict. Otherwise, this string is the feedback for your attack.
- As soon as you receive feedback "O", you should stop making queries and continue solving the remaining test cases.

Note: Some of the test files use a non-adaptive grader, while some use an adaptive grader, where the initial point and the route are not fixed at the start, but the answers to your queries are chosen in such a way that there is always at least one initial point $(H,K)$ and sequence of moves which are consistent with all answers.

**Don't forget to flush the output after printing each line!**

### Constraints 
- $T = 2048$
- $|H|, |K| \leq 10^{18}$
- $D \in \{0, 1\}$

### Subtasks
**Subtask 1 (12 points):** $Q = 72$, $D = 0$

**Subtask 2 (20 points):** $Q = 66$, $D = 1$

**Subtask 3 (32 points):** $Q = 65$, $D = 1$

**Subtask 4 (36 points):** $Q = 64$, $D = 1$

### Example
```
You         Grader
            1 64 1
1 0 0
            NN
1 2 3
            XP
2 1 0 3 3
            IN
1 4 0
            PN
1 -1 1
            NY
2 -2 1 2 2
            O
```

### Explanation
**Example case 1:** The truck follows the route $(1, 2)\rightarrow (2, 2)\rightarrow (2, 1)\rightarrow (3, 1)\rightarrow (2, 1)\rightarrow (1, 1)$. During the interaction:
- The truck is initially located at $(1, 2)$.
- The first attack is Hellfire at the point $(0, 0)$. The attack is unsuccessful and the feedback is "NN".
- The truck moves to the point $(2, 2)$.
- The second attack is Hellfire at the point $(2, 3)$. The attack is unsuccessful and the feedback is "XP".
- The truck moves to the point $(2, 1)$.
- The third attack is Ring of Fire at the perimeter of the rectangle with the bottom left corner $(1, 0)$ and the top right corner $(3, 3)$. Since the truck lies inside this rectangle, the attack is unsuccessful and the feedback is "IN".
- The truck moves to the point $(3, 1)$.
- The fourth attack is Hellfire at the point $(4, 0)$. The attack is unsuccessful and the feedback is "PN".
- The truck moves to the point $(2, 1)$.
- The fifth attack is Hellfire at the point $(-1, 1)$. The attack is unsuccessful and the feedback is "NY".
- The truck moves to the point $(1, 1)$.
- The sixth attack is Ring of Fire at the perimeter of the rectangle with the bottom left corner $(-2, 1)$ and the top right corner $(2, 2)$. Since the truck lies on this perimeter, the attack is successful and the feedback is "O", since the truck with the EMP chip is destroyed.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>