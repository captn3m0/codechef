---
{"category_name":"medium","problem_code":"NMN","problem_name":"F - Random Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nagpaljatin141","problem_tester":null,"date_added":"5-08-2019","tags":{"0":"bit22019","1":"hashing","2":"map","3":"nagpaljatin141","4":"strings","5":"suffix"},"problem_difficulty_level":"Medium","best_tag":"Suffix Array","editorial_url":"https://discuss.codechef.com/problems/NMN","time":{"view_start_date":1569002400,"submit_start_date":1569002400,"visible_start_date":1569002400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NMN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given $2$ string $A$ and $B$ and an integer $K$. You have to find a substring of length $K$ such that it is common in both the strings i.e. present in both String $A$ and $B$. 

A substring of a string is a contiguous subsequence of that string. For Example, string "bite" is substring of string "biteration", but string "bion" is not.

If there are multiple such $K$ length substrings which are present in both $A$ and $B$, then you have to find the one which occurs maximum no of times in both strings combined i.e. the sum of occurrences in both the strings is maximum.

If still, there are multiple such $K$ length substrings with max Occurrence and common in both, then u have to find the one which is lexicographically smallest among them.

###Input:
- First line contains number of Test Cases $T$.
- First line of each Test Case contains $3$ integers $N$, $M$ and $K$, denoting Length of string $A$, length of string $B$ and Length of Common Substring respectively.
- Next $2$ lines contains the strings $A$ and $B$ respectively consisting only of lowercase Latin characters.

###Output:
For each testcase, in a single line, you have to output the required common substring, or if no such substring exists, output **"-1"**(without quotes).

###Constraints 
- $1 \leq T \leq 20$
- $1 \leq N,M \leq 2*10^5$
- $1 \leq K \leq min(N,M)$
- Sum of $N$ over all test cases does not exceed $2*10^5$
- Sum of $M$ over all test cases does not exceed $2*10^5$

###Subtasks
- 15 points : $1 \leq N,M \leq 100$
- 36 points : $1 \leq N,M \leq 1000$
- 99 points : Original Constraints

###Sample Input:
	3
	7 6 4
	abababc
	bababa
	3 4 1
	abb
	aabb
	4 4 3
	aabb
	abab

###Sample Output:
	abab
	b
	-1
	
###EXPLANATION:
In the first example, "abab" and "baba" are $2$ substrings which are common while "babc" is not.
Sum of occurrences of "abab" is 3(2 in A + 1 in B) and of "baba" is also 3(1 in A and 2 in B).
So, we need to take the lexicographically smaller among them, which is **abab**

In the second example, "a" and "b" are common substrings, but since string "b" has greater sum of occurrences, ans is "b".

In the third example, since there is no common substring of length $3$, the ans is "-1".
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>