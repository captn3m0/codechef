---
{"category_name":"challenge","problem_code":"WTRSORT","problem_name":"Water Sort Puzzle (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"jay_1048576","problem_tester":"","date_added":"23-03-2021","tags":{"0":"april21","1":"greedy","2":"heuristic","3":"implementation","4":"jay_1048576","5":"tie"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WTRSORT","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WTRSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/WTRSORT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/WTRSORT.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/WTRSORT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/WTRSORT.pdf) as well.

Chef wants to study reactions between non-miscible reagent samples with different colours. There are $N$ colours (numbered $1$ through $N$). Chef has $N+2$ test tubes (numbered $1$ through $N+2$), each of them can hold a volume $M$ ml; initially, tubes $N+1$ and $N+2$ are empty, while for each $i$ ($1 \le i \le N$), the $i$-th tube is completely filled and contains $M$ ml of reagents with some colours. Since reagents with different colours do not mix, we can describe the contents of the $i$-th tube from its bottom to its top by a sequence $B_{i,1}, B_{i,2}, \ldots, B_{i,M}$, i.e. for each valid $j$, the $j$-th mililiter of volume of the $i$-th tube, measured from the bottom, is filled by a reagent with a colour $B_{i,j}$. The total initial volume of each reagent is equal to $M$ ml.

To facilitate his study, Chef wants to redistribute the reagents into tubes according to their colours, i.e. at the end, for each colour $i$, there must be exactly one tube which contains all $M$ ml of this reagent and no reagents with other colours. The specific positions of reagents or empty tubes in this final state do not matter.

In order to achieve this, you may first reverse the order of reagents in some (possibly none or all) tubes. Then, you may perform operations of two types:
1. Choose two test tubes $P$ and $Q$ and transfer the topmost $1$ ml of reagent from the tube $P$ to the top of the tube $Q$.
    - This is only allowed if $P$ is non-empty and $Q$ is not full.
    - If $Q$ is empty, the cost of this operation is $0$.
    - Otherwise, let's denote the colour of the topmost reagent in tube $P$ by $U$ and the colour of the topmost reagent in $Q$ (before this operation) by $V$. If $D_{U,V} = -1$, this operation is not allowed. Otherwise, it is allowed and its cost is $D_{U,V}$.
2. Choose a test tube $P$ and increase its capacity by $1$ ml. The cost of this operation is $C_P$.

You are given the costs of pouring reagents on top of each other and information about which reagents react with each other and therefore cannot be poured on top of each other, i.e. the matrix $D$. It is guaranteed that $D_{i,j} = D_{j,i}$ for each valid $i$ and $j$ and $D_{i,i} = 0$ for each valid $i$.

You must separate the reagents (reach the state described above) using no more than $2^{20} = 1,048,576$ operations. The sum of costs of the operations you use to achieve this should be as small as possible.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains $N+2$ space-separated integers $C_1, C_2, \ldots, C_{N+2}$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $N$ space-separated integers $D_{i,1}, D_{i,2}, \ldots, D_{i,N}$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains $M$ space-separated integers $B_{i,1}, B_{i,2}, \ldots, B_{i,M}$.

### Output
- First, print a single line containing two space-separated integers $X$ and $Y$ ($0 \leq X \leq N$, $0 \leq Y \leq 2^{20}$) ― the number of test tubes whose contents you wish to initially reverse and the number of operations you wish to perform.
- Then, print a single line containing $X$ space-separated integers $A_1, A_2, \ldots, A_X$ ― the numbers of the test tubes you wish to initially reverse ($1 \leq A_i \leq N$ for each valid $i$).
- Then, print $Y$ lines describing the operations in the order in which you wish to perform them.
    - To perform an operation of the first type, print a line containing three space-separated integers $1$, $P$ and $Q$ ($1 \le P, Q \le N+2$, $P \neq Q$).
    - To perform an operation of the second type, print a line containing two space-separated integers $2$ and $P$ ($1 \le P \le N+2$).

### Constraints
- $N = 512$
- $M = 16$
- $1 \leq C_i \leq 1,000$ for each valid $i$
- $-1 \leq D_{i,j} \leq 100$ for each valid $i,j$
- $D_{i,j} = D_{j,i}$ for each valid $i,j$
- $D_{i,i} = 0$ for each valid $i$
- $1 \leq B_{i,j} \leq N$ for each valid $i,j$

### Example Input
```
4 4
3 5 2 3 1 4
0 -1 2 -1
-1 0 1 7
2 1 0 -1
-1 7 -1 0
1 2 1 3
3 3 2 2
4 1 3 4
1 2 4 4
```

### Example Output
```
2 19
1 3
1 4 5
1 4 5
1 3 5
1 2 4
1 2 4
1 1 2
2 4
1 1 4
1 2 6
1 3 6
1 1 6
1 1 2
1 3 2
1 4 1
1 4 1
1 4 1
1 4 1
1 4 6
1 3 5
```
	
### Explanation
The initial arrangement of reagents in test tubes is  
![Image 0](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Initial.png)  
After reversing the contents of the $1$-st and $3$-rd test tube, the arrangement becomes  
![Image 1](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Move+-+0.png)  
After the first $6$ operations, the arrangement becomes  
![Image 2](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Move+-+6.png)  
After the first $8$ operations:  
![Image 3](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Move+-+8.png)  
After the first $13$ operations:  
![Image 4](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Move+-+13.png)  
After all $19$ operations, the reagents get separated:  
![Image 5](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Sample+Move+-+19.png)

The cost paid for the $6$-th operation is $2$ and the cost paid for the $7$-th operation is $3$. The cost paid for all other operations is $0$. Thus, the reagents are separated with a total cost $5$. Note that this is not necessarily an optimal way to separate the reagents.

In the actual test data, $N$ is $512$ and $M$ is $16$. Smaller values have been used in this example for clarity.

### Test Generation
The generator used to generate the test cases can be found [here](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Public+Generator.cpp).

- $N = 512$
- $M = 16$
- Initially, for each $i$ ($1 \le i \le N$), the $i$-th test tube is completely filled with $M$ ml of the reagent with colour $i$.
- A parameter $G \in \{4096, 16384, 65536, 1048576\}$ is chosen and the following operation is performed $G$ times: two different test tubes $E$ and $F$ such that $E$ is not empty are chosen randomly and $1$ ml of reagent is transferred from top of $E$ to $F$. We consider the capacities of the tubes to be infinite here.
- Then, for each test tube that contains more than $M$ ml of reagents, the volume of reagents in it is decreased to $M$ by transferring excess reagents (in whole mililiters) from the top into tubes that contain less than $M$ ml of reagents randomly.
- Then, the test tubes $N+1$ and $N+2$ are made empty by transferring their contents randomly to other test tubes that contain less than $M$ ml of reagents.
- The values of $C_1, C_2, \ldots, C_{N+2}$ are chosen uniformly randomly and independently between $1$ and $1000$ inclusive.
- Then, another parameter $K\in \{1,4,16,64\}$ is chosen.
- Finally, $\frac{N(N-1)}{2K}$ distinct unordered pairs of distinct colours are chosen randomly. For each of these pairs $(U, V)$ ($1 \le U \lt V \le N$), $D_{U,V} = D_{V,U}$ is chosen uniformly randomly and independently between $1$ and $100$ inclusive. For all other such pairs, $D_{U,V} = D_{V,U} = -1$.

There are $16$ test files corresponding to all possible combinations of parameters $G$ and $K$.

### Scoring
The checker used to determine the score of your submission can be found [here](https://s3.amazonaws.com/codechef_shared/download/Images/APRIL21/WTRSORT/WTRSORT+Public+Checker.cpp).

If you perform an invalid operation or the reagents are not separated after all the operations (particularly, if there is a test tube which contains reagents with more than one colour or there is a colour which appears in more than one test tube), then you will receive the Wrong Answer verdict.

Otherwise, the score for a test file is the total cost of all the operations. The score of a submission is the sum of scores of all test files. Your goal is to minimise this score.

There are 16 test files. During the contest, the displayed score will account for exactly 8 test files, i.e. your score reflects your submission's performance on 50% (8/16) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 8 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>