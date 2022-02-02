---
{"category_name":"medium","problem_code":"LAZERTST","problem_name":"Lasers Everywhere Alternative","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":null,"date_added":"24-01-2020","tags":{"0":"combinatorics","1":"march20","2":"medium","3":"tmwilliamlin","4":"vivek_1998299"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LAZERTST","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAZERTST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/LAZERTST.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/LAZERTST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/LAZERTST.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/LAZERTST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/LAZERTST.pdf) as well.

**This is an interactive problem.**

When Vivek was creating the problem LAZER, he realised that it can be used to create a different, interactive problem. Can you solve this problem too?

Let's frame this problem formally. You are given integers $N$, $M$, $K$ and $Q$. Consider a random sequence $A_1, A_2, \ldots, A_N$, where each element is generated independently and uniformly randomly between $1$ and $M$ (inclusive). As described in the problem statement of LAZER, we create line segments between pairs of points $(i, A_i)$ and $(i+1, A_{i+1})$ for each valid $i$.

The *height* of a line segment connecting points $(x_1, y_1)$ and $(x_2, y_2)$ is defined as $|y_1-y_2|$. You are given $Q$ queries. In each query, you are given integers $L$ and $R$; you should consider the line segments such that the $x$-coordinates of their endpoints lie between $L$ and $R$ inclusive, and you should find the maximum of heights of these segments.

Your task is to answer these queries. However, the sequence $A$ is hidden and you may only ask at most $K$ questions (of a different type from the queries you should answer). In each of your questions:
- You should choose integers $x_1$, $x_2$ and $y$, where $1 \le x_1 \lt x_2 \le N$ and $1 \le y \le 10^9$.
- Consider a laser beam fired horizontally to the right from the point $(x_1,y)$, which stops at the point $(x_2,y)$ and does not propagate further.
- This beam collides with zero or more of the line segments described above. The beam is considered to collide with a line segment if it intersects or touches this segment, except when the left endpoint of this segment is $(x_2, y)$ or its right endpoint is $(x_1, y)$.
- The answer to this question is the maximum of heights of the segments with which it collides or the information that it does not collide with any segments.

### Interaction
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing four space-separated integers $N$, $M$, $K$ and $Q$. 
- Then, you should read $Q$ lines. Each of these lines contains two space-separated integers $L$ and $R$ describing one of the queries which you should answer.
- Then, you may ask questions.
    - To ask a question, you should print a line containing four space-separated integers $1$, $x_1$, $x_2$ and $y$.
    - Then, you should read a line containing a single integer $H$.
    - If the question was invalid or if you asked too many questions, $H = -1$.
    - Otherwise, if the beam in this question does not collide with any segments, then $H = -2$.
    - Otherwise, $H$ is the maximum of heights of the segments with which the beam collides.
- When you have determined the answer, you should print a line containing $Q + 1$ space-separated integers $2$, $ans_1$, $ans_2$, ..., $ans_Q$, where for each valid $i$, $ans_i$ is the answer to the $i$-th query. This does not count as a question.
- Finally, you should read a line containing a single integer: $1$ if your answer is correct or $-1$ if it is incorrect. If your answer was correct, you should continue solving the remaining test cases.

Note that when you receive $-1$ (either as the response to a question or to your answer), you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict.

Don't forget to flush the output after printing each line!

### Constraints
- $T = 10$
- $Q = 10$
- $1 \le L \lt R \le N$

### Subtasks
**Subtask #1 (30 points):**
- $N = 20,000$
- $2 \le M \le 10$
- $R - L \ge 1,000$
- $K = 3$ 

**Subtask #2 (30 points):**
- $N = 2,000$
- $M = 10^9$
- $R - L \ge 100$
- $K = 100$ 

**Subtask #3 (40 points):** 
- $N = 2,000$
- $M = 10^9$ 
- $R - L \ge 100$
- $K = 10$ 

### Example
```
Grader          You
1
4 2 2 3
1 2
3 4
1 4
                1 1 2 1
0                                                               
                1 3 4 2
1
                2 0 1 1
1
```

### Explanation
**Example case 1:** The hidden sequence $A$ is $[1,1,1,2]$. Since by asking $x_1=1$, $x_2=2$ and $y=1$, we got the answer $0$, it obviously means that the answer to the first query is $0$. Similarly, since by asking $x_1=3$, $x_2=4$ and $y=2$, we got the answer $1$, which is the largest possible height of a line segment here, the answer to the second query is $1$. The answer to the third query cannot be smaller than the answer to the second query, so it is also $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>