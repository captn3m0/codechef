---
{"category_name":"challenge","problem_code":"SQSORT","problem_name":"Stack-Queue Sort (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/meL57y5f424","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"10-12-2020","tags":{"0":"alei","1":"heuristic","2":"jan21","3":"sorting","4":"tie"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SQSORT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SQSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/SQSORT.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/SQSORT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/SQSORT.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/SQSORT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/SQSORT.pdf) as well.

There are $B$ blocks (numbered $1$ through $B$) distributed in $N$ containers (numbered $1$ through $N$). For each valid $i$, the weight of the $i$-th block is $W_i$ kilograms.

For each container $i$, you should decide if it will be used like a *stack* or a *queue*. At any time, a container may contain any sequence of blocks (possibly the empty sequence); let's denote the number of the $j$-th block (indexed from $1$) in the $i$-th container by $A_{i,j}$.

A [stack](https://en.wikipedia.org/wiki/Stack_(abstract_data_type)) is a data structure that stores a sequence of integers $(X_1, X_2, \ldots, X_M)$ and supports two types of instructions:
- `pop`: Remove the last element of the sequence. After this instruction, the sequence becomes $(X_1, \ldots, X_{M-1})$; it must be non-empty before this instruction. The return value of this instruction is $X_M$.
- `push a`: Add an element $a$ at the end of the sequence. After this instruction, the sequence becomes $(X_1, \ldots, X_M, a)$.

Similarly, a [queue](https://en.wikipedia.org/wiki/Queue_(abstract_data_type)) is a data structure that stores a sequence of integers $(X_1, X_2, \ldots, X_M)$ and supports two types of instructions:
- `pop`: Remove the first element of the sequence. After this instruction, the sequence becomes $(X_2, \ldots, X_M)$; it must be non-empty before this instruction. The return value of this instruction is $X_1$.
- `push a`: Add an element $a$ at the end of the sequence. After this instruction, the sequence becomes $(X_1, \ldots, X_M, a)$.

For each valid $i$, it takes $C_i \cdot w$ nanoseconds to pop a block with weight $w$ from the container $i$ and $D_i \cdot w$ nanoseconds to push a block with weight $w$ to the container $i$.

Using the given data structures, you may perform the following operation at most $B^2/2$ times: choose two containers $c_1$ and $c_2$ ($c_1 \neq c_2$), pop a block from the $c_1$-th container and then push this block to the $c_2$-th container.

Your task is to sort all the blocks in a single container, i.e. after performing all operations, the sequence of blocks in some container must be $(1, 2, \ldots, B)$. The time spent performing operations should be as small as possible.

### Input
- The first line of the input contains two space-separated integers $N$ and $B$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- The third line contains $N$ space-separated integers $D_1, D_2, \ldots, D_N$.
- The fourth line contains $B$ space-separated integers $W_1, W_2, \ldots, W_B$.
- The next $N$ lines describe the initial distribution of blocks in containers. For each valid $i$, the $i$-th of these lines contains an integer $M$ denoting the number of blocks which are initially in the $i$-th container, followed by a space and $M$ space-separated integers $A_{i,1}, A_{i,2}, \ldots, A_{i,M}$ denoting the sequence of blocks which are initially in this container.

### Output
- First, print a line containing a string with length $N$. For each valid $i$, the $i$-th character of this string should be either 'S' if the $i$-th sequence is used as a stack or 'Q' if it is used as a queue.
- Then, print a line containing a single integer $Q$ ― the number of operations to perform.
- Finally, print $Q$ lines. Each of these lines should contain two space-separated integers $c_1$ and $c_2$ describing an operation that pops an element from the $c_1$-th container and pushes it into the $c_2$-th container.

### Constraints
- $2 \le N \le 128$
- $B = 1,024$
- $1 \le C_i, D_i \le 50$ for each valid $i$
- $1 \le W_i \le 50$ for each valid $i$
- $0 \le M \le B$
- $1 \le A_{i,j} \le B$ for each valid $i,j$

### Example Input
```
3 4
1 2 3
1 2 3
2 1 4 3
2 3 2
1 1
1 4
```

### Example Output
```
QQS
4
1 3
1 2
4 2
4 2
```

### Explanation
The first two containers are used as queues and the third container as a stack. The sequences change as follows:
- Initially: $(3,2), (1), (4)$.
- After the first operation: $(2), (1), (4,3)$.
- After the second operation: $(), (1,2), (4,3)$.
- After the third operation: $(), (1,2,3), (4)$.
- After the fourth operation: $(), (1,2,3,4), ()$.

### Test Generation
The source code used to generate test data can be downloaded [here](https://codechef_shared.s3.amazonaws.com/download/Images/JAN21/SQSORT/generator.cpp).

- $N$ can be $16$, $32$, $64$ or $128$.
- All values of $C_i$, $D_i$ and $W_i$ are chosen uniformly randomly and independently between $1$ and $50$ inclusive.
- A permutation of the integers $1$ through $B$ is chosen uniformly randomly. The blocks are pushed to the containers one by one in this order.
- One of the following two initial distribution schemes is chosen:
    - All $B$ blocks are pushed into the $1$-st container.
    - For each block, a container into which it is pushed is chosen uniformly randomly and independently.
- There are eight test files ― one for each possible value of $N$ and distribution scheme.

### Scoring
If your output is invalid (in particular if you attempt to pop an empty container), you do not sort the blocks in a single container or you use more than $B^2/2$ operations, you will receive the Wrong Answer verdict.

Otherwise, the score of a test file is the number of nanoseconds spent performing your operations. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are eight test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 50% (4/8) of the test files; However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 4 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>