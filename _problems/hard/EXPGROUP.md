---
{"category_name":"hard","problem_code":"EXPGROUP","problem_name":"Random Grouping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/vnszG0X15zo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"28-11-2020","tags":{"0":"expected","1":"generating","2":"hard","3":"jtnydv25","4":"ltime92"},"problem_difficulty_level":"Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/EXPGROUP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPGROUP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/EXPGROUP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/EXPGROUP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/EXPGROUP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/EXPGROUP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/EXPGROUP.pdf) as well.

There are $N$ students numbered $1, 2, \ldots, N$. Their teacher wants to group them. The teacher is a fan of randomness and uses the following :
Let $g$ denote the current number of groups. First the teacher makes one group containing the student $1$. So, initially $g = 1$. Now, for each student $i$ from $2$ to $N$ in this order:
- With probability $1 / (g + 1)$, he creates a new group containing only student $i$. So, now $g$ is increased by $1$.
- With probability $g / (g + 1)$, he picks one of the $g$ groups at random and adds student $i$ to that group.

Find the expected value of sum of squares of the group sizes. If the answer is $P / Q$ with $\text{gcd}(P, Q) = 1$, print the value of $P Q^{-1}$ modulo $998244353$. Here $Q^{-1}$ denotes the modular inverse of $Q$ modulo $998244353$.

###Input:

- The only line of the input contains a single integer, $N$.

###Output:
Find the expected value of sum of squares of the group sizes modulo $998244353$.


###Constraints 
- $1 \leq N \leq 10^5$

###Subtasks
**Subtask \#1 \(10 Points\)**: $1 \leq N \leq 1000$

**Subtask \#2 \(90 Points\)**: original constraints

###Sample Input 1:
	2

###Sample Output 1:
	3


###Sample Input 2:
	3

###Sample Output 2:
	665496241

### Explanation:

In the first example:
- With probability $1 / 2$, there are two groups,  $\{1\}$ and $ \{2\}$. Sum of squares of sizes is $2$.
- With probability $1 / 2$, there is a single group  $\{1, 2\}$. Sum of squares of sizes is $4$.

So, the required expected value is $1/2 \times 2 + 1 / 2 \times 4 = 3$.

In the second example,
- With probability $1 / 6$, there are three groups : $\{1\}$, $\{2\}$ and $ \{3\}$. The sum of squares of sizes here is $3$.
- With probability $1 / 6$, there are two groups : $\{1, 3\}$ and $\{2\}$. The sum of squares of sizes here is $5$.
- With probability $1 / 6$, there are two groups : $\{1\}$ and $\{2, 3\}$. The sum of squares of sizes here is $5$.
- With probability $1/4$, there are two groups : $\{1, 2\}$ and $\{3\}$. The sum of squares of sizes here is $5$.
- With probability $1 / 4$, there is only one group : $\{1, 2, 3\}$. The sum of squares of sizes is $9$.

The expected value, therefore is $1 / 6 \times (3 + 5 + 5) + 1 / 4 \times (5 + 9) =\dfrac{17}{3}$.

$3^{-1} = 332748118$ modulo $998244353$. So, we print $17 \times 332748118$ modulo $998244353 = 665496241$
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>