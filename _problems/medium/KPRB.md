---
{"category_name":"medium","problem_code":"KPRB","problem_name":"K-Prob","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"17-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KPRB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a string $S$ of length $n$ and an integer $K$.    
We will define $F(L)$ here. Let's choose $K$ random sub-strings of length $L$ from $S$.    
Then $F(L)$ equals the probability such that all of them are pairwise identical.      
  
See the **Explanation** section for more clarity.   

 
You have to find $F(L)$  for each $1 \leq L \leq n$. 

It can be shown that any $F(L)$ can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are coprime integers, $P \geq 0$, $Q > 0$ and $Q$ is coprime with $998244353$. You should compute $P \times Q^{-1}%(998244353)$, where $Q^{−1}$ denotes the multiplicative inverse of $Q$ modulo $998244353$.


###Input:

- First line will contain two integers, $n$ (the length of string $S$) and $K$. 
- Next line will contain the string $S$. 

###Output:
Print $n$ space separated integers, $F(L)$, for each $1 \leq L \leq n$, in a single line, 

###Constraints 
- $1 \leq n \leq 10^6$
- $2 \leq K \leq 10^6$
- It’s guaranteed that $S$ contains only lower-case Latin letters.


###Sample Input:
	5 3
	ababa

###Sample Output:
	239578645 748683265 332748118 748683265 1
	
###Explanation:

In our sample, for $L= 3$,  we have 3 sub-strings : 

- $aba$ (Starting from 1st position)
- $bab$ (Starting from 2nd position)
- $aba$ (Starting from 3rd position)

Among them we can chose in the following ways, to get all 3 of them pairwise identical:

- $(1, 1, 1) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(2, 2, 2) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(3, 3, 3) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(1, 1, 3) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(1, 3, 1) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(3, 1, 1) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(3, 3, 1) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(3, 1, 3) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$
- $(1, 3, 3) : Probability\ =\ \frac{1}{3} \times \frac{1}{3} \times \frac{1}{3} = \frac{1}{27}$

$(1, 3, 3)$ means that the three random substrings chosen are the substring starting at index 1, at index 3 and at index 3.

So $F(3) = 9 \times \frac{1}{27} =  \frac{1}{3}$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>