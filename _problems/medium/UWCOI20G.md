---
{"category_name":"medium","problem_code":"UWCOI20G","problem_name":"Optimal Memory Address","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"astoria","problem_tester":null,"date_added":"25-02-2020","tags":{"0":"astoria","1":"medium","2":"uwcoi20"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/UWCOI20G","time":{"view_start_date":1582655400,"submit_start_date":1582655400,"visible_start_date":1582655400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI20G","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Kim has successfully broken into the vault. He finds the main computer, a hideous creation with a wormhole to some extradimensional space.

As we all know, Kim is a very powerful hacker. However, it seems that he has finally met his match: Jishnu's computer network is too difficult for him to hack into, even though it is right in front of him! He needs your help to recover the files related to the JSA's world domination plans so he can expose them to the world and win the Pulitzer Prize.

Using some tricks, Jishnu has created a computer system with infinite memory! Each memory address is numbered from $1$ to $\infty$.

Kim knows that all of the data related to Jishnu's world domination plans is stored in $N$ memory addresses. The $i$th memory address is $A[i]$. These memory addresses may be very large, so we can express an integer $X$ as the product of $K(X)$ prime factors raised to some power. The prime factors are given in increasing order. Formally, for an integer $X$, there are two $K(X)$-length arrays $P(X)$ and $Q(X)$ where $P(X)[i] < P(X)[i+1]$ for all $i$, and $X = \prod_{i=1}^{K(X)} {P(X)[i]}^{Q(X)[i]}$. This is the format that the input will be given in. Note that they may not be distinct.

Of course, it takes time to move between memory addresses. Kim has found an odd rule for finding the time needed to move between two memory addressees numbered $X$ and $Y$, $dist(X,Y)$. Let each integer $X$ be associated with an infinite-length sequence $S(X)$. Below is the pseudocode for creating the sequence given $X$:

```
S(X) = []
for i=1 to K(X) do:
    for j=1 to Q(X)[i] do:
        append P(X)[i] to S(X)
while (true):
    append -1 to S(X)

```

Let $V$ be the first index (0-indexed) where $S(X)[V] \neq S(Y)[V]$. Furthermore, let $size(X)$ be $\sum_{i=1}^{K(X)} Q(X)[i]$. Then, $dist(X,Y) = size(X)+size(Y)-2*V$. Please note, $dist(X,X) = 0$ because Kim is not moving memory address.

Kim's hacking works as follows: he chooses a starting memory address as his incision point, and then he goes directly to each  of the memory addresses which contains the world domination plans separately, one after another. So, the total amount of time it takes for Kim to get all the information is $\sum_{i=1}^{N} dist(C,A[i])$, where $C$ was his starting memory address. Kim is interested in what the minimum possible value of this could be if he chooses an optimal value of $C$. Since $C$ must be a valid memory address, $C$ must be an integer greater than or equal to $1$.

###Input:

- The first will contain one integer, $N$. 
- For the next $N$ lines, the $(i+1)$th line will have their first integer as $K(A[i])$. Following that is $2*K(A[i])$ integers, $P(A[i])[1] \quad Q(A[i])[1] \quad ... \quad P(A[i])[K(A[i])] \quad Q(A[i])[K(A[i])]$. 

###Output:
For each testcase, output one integer: the minimum possible value of $\sum_{i=1}^{N} dist(C,A[i])$.

###Constraints 
- $\sum_{i=1}^{N} K(A[i]) \leq 10^6$
- $1 \leq N \leq 10^6$
- $A[i] > 1$ for all $i$
- $P[i], Q[i] \leq 10^9$ for all $i$
- $P(X)[i]$ is always prime
- $P(X)[i] < P(X)[i+1]$ for all $i$
- All $P(X)[i]$ are distinct for a given $X$.

###Subtasks
- 50 points : $Q(A[i])[j] = 1$ for all $(i,j)$.
- 50 points : No additional constraints.

###Sample Input:
	5
	1 3 1
	2 2 1 3 1
	1 3 2
	2 3 1 5 1
	1 2 1


###Sample Output:
	7
	
###EXPLANATION:
The array $A$ is $[3, 6, 9, 15, 2]$. It can be verified that the minimum possible time is $7$, which is achieved when $C=3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>