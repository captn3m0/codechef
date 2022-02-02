---
{"category_name":"challenge","problem_code":"ANTHILL","problem_name":"(Challenge) Building Anthills","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"23-12-2019","tags":{"0":"alei","1":"alei","2":"challenge","3":"jan20","4":"power","5":"vijju123"},"problem_difficulty_level":"Unavailable","best_tag":"Power Graphs","editorial_url":"https://discuss.codechef.com/problems/ANTHILL","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANTHILL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/ANTHILL.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/ANTHILL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/ANTHILL.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/ANTHILL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/ANTHILL.pdf) as well.

The queen of ants hired Ada to build their anthill. Ada designed the anthill as $N$ rooms (numbered $1$ through $N$) interconnected by $M$ bidirectional roads (numbered $1$ through $M$). For simplicity, let's denote a road that connects rooms $u$ and $v$ by $(u, v)$. At any time, there may be at most one road between any two rooms and roads connecting a room with itself are not allowed.

Ada started from scratch by building the $N$ rooms and choosing the $M$ roads that should be built. In order to create the roads, she wants to give instructions to the ants and pay them in antcoins (a very small currency). There are two possible types of instructions:
1. $K$, $E = \{(x_1,y_1), (x_2,y_2), \ldots, (x_K,y_K)\}$: Let $E$ be a set of $K$ distinct roads. The ants should build all roads in the set $E$ that do not already exist. Moreover, for every three distinct rooms $u$, $v$ and $w$, if $(u, v) \in E$ and $(v, w) \in E$, then the ants should also build the road $(u, w)$ if it does not already exist. The cost of this instruction is $A \cdot K$ antcoins.
2. $u$, $v$: The ants should remove the road $(u, v)$ if it exists. The cost of this instruction is $R$ antcoins.

After all the instructions are executed, only the planned $M$ roads should be built. Help Ada build the anthill while spending as few antcoins as possible.

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $A$ and $R$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting a road that connects rooms $u$ and $v$.

### Output
First, print a line containing a single integer $Q$ ― the number of instructions. Then, print $Q$ lines; each of these lines should describe one instruction in the format `1 K x_1 y_1 x_2 y_2 ... x_K y_K` or `2 u v`.

### Test generation
For all test files (except the example), $N=512$, $A=10$ and $R=2$. Next, internal parameters $S$, $L$ and $D$ are chosen in the following way:
- $S$ and $L$ can be $1$ and $2,048$, $2$ and $1024$, $16$ and $256$, or $64$ and $128$.
- $D$ can be $0$, $128$ or $2,048$.
- There is one test file for each possible combination of these parameters.

The anthill is then generated as follows:
- $S$ sets of $L$ distinct roads are chosen uniformly randomly and independently (**In total $S \cdot L$ distinct roads are chosen**). The first instruction is executed $S$ times, once for each of these sets of roads.
- Then, $D$ distinct existing roads are chosen uniformly randomly and independently. The second instruction is executed $D$ times, once for each of these roads.

### Scoring
If any of your instructions are invalid, the sum of $K^2$ over all instructions of the first type exceeds $10^6$ or the number of instructions $Q \gt 10^6$, you will receive the Wrong Answer verdict. Otherwise, the score of a test file is the cost of constructing the anthill, i.e. the total number of antcoins paid to perform all instructions. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are twelve test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on approximately 33.33% (4/12) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 8 test files.

### Example Input
```
4 5 10 2
1 2
2 3
3 4
4 1
1 3
```

### Example Output
```
3
1 3 1 2 2 3 3 4
2 2 4
1 1 1 4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>