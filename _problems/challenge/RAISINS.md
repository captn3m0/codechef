---
{"category_name":"challenge","problem_code":"RAISINS","problem_name":"(Challenge) Raisins","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"28-01-2020","tags":{"0":"alei","1":"challenge","2":"feb20","3":"tmwilliamlin"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RAISINS","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RAISINS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/RAISINS.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/RAISINS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/RAISINS.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/RAISINS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/RAISINS.pdf) as well.

Chef Ada baked a rectangular cake with width $W$ and height $H$. To finish the cake, she placed $R$ raisins on it. For simplicity, we will represent raisins by points in a plane. For each valid $i$, the position of the $i$-th raisin is $(X_i, Y_i)$.

The price of the cake is twice the area of the smallest convex polygon that contains all raisins.

Ada thinks that the current price is too high, so she wants to choose positive integers $N$ and $M$ and cut the cake into a grid of cake pieces with $N$ columns (numbered $1$ through $N$ from left to right) and $M$ rows (numbered $1$ through $M$ from bottom to top), where all pieces have identical widths and heights. Also, the widths and heights of the pieces must be integers, which implies that $N$ must be a divisor of $W$ and $M$ must be a divisor of $H$. Let's denote a piece at column $i$ and row $j$ by $(i,j)$.

Next, Ada wants to reorder the pieces using the following operations (they may be performed in any order and any number of times):
- `1 r`: Shift the row $r$ of the matrix to the right, i.e. for each valid $c$, the final position of the piece $(c,r)$ becomes $(c+1,r)$ if $c+1 \le N$ or $(1,r)$ otherwise.
- `2 c`: Shift the column $c$ of the matrix upwards, i.e. for each valid $r$, the final position of the piece $(c,r)$ becomes $(c,r+1)$ if $r+1 \le M$ or $(c,1)$ otherwise.

At the end, Ada does not sell the pieces separately, but as a single cake. Therefore, the final price of the cake is still twice the area of the smallest convex polygon that contains all raisins for this new cake.

Help Ada slice the cake into at most $2^{10}$ pieces and perform at most $2^{10}$ operations to minimise the final price of the cake.

### Input
- The first line of the input contains three space-separated integers $W$, $H$ and $R$.
- $R$ lines follow. For each $i$ ($1 \le i \le R$), the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
- First, print a line containing three space-separated integers $N$, $M$ and $Q$.
- Then, print $Q$ lines. Each of these lines should describe one operation you want to perform, in the format described above.

### Test generation
- $W = H = 720720$
- $R = 10^5$
- for each valid $i$, $X_i$ is chosen uniformly randomly among all integers between $1$ and $W-1$ (inclusive) that are coprime with $W$
- for each valid $i$, $Y_i$ is chosen uniformly randomly among all integers between $1$ and $H-1$ (inclusive) that are coprime with $H$

### Scoring
If $N \cdot M \gt 2^{10}$, $Q \gt 2^{10}$ or the widths or heights of the pieces are not integers, your solution will receive the Wrong Answer verdict.

The score of a test file is the final price of the cake. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are three test files. During the contest, the displayed score will account for exactly two test files, i.e. your score reflects your submission's performance on approximately 66.66% (2/3) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the third test file.

### Example Input
```
9 6 6
2 3
1 1
5 3
2 5
5 1
8 5
```

### Example Output
```
3 3 3
1 2
2 3
2 3
```

### Explanation
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB20/RAISINS/RAISINS1.png"></img>
- $N=M=3$
- The red points in the picture are the raisins.
- The piece highlighted in blue is denoted by $(3,2)$.
- After shifting the second row to the right and the third column twice upwards, the resulting cake is:

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB20/RAISINS/RAISINS2.png"></img>

- The score is twice the area of the polygon $\mathsf{NORP}$, but there may be a better solution that leads to a smaller area.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>