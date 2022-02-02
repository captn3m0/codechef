---
{"category_name":"medium","problem_code":"CLMARKS","problem_name":"Phineas and Marks","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"avijit_agarwal","problem_tester":"","date_added":"27-06-2020","tags":{"0":"ad","1":"avijit_agarwal","2":"avijit_agarwal","3":"cole2020","4":"finding","5":"observation"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CLMARKS","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLMARKS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Phineas goes to school after the lockdown is over and finds out that all his $N-1$ friends have turned into bullies. So he himself too starts disliking his friends. The teacher Dr Doof wants to distribute $M$ marks to his $N$ students (including Phineas).  Dr Doof is busy in his experiments and so wants the students to distribute $M$ marks among themselves such that each student gets a non negative integer marks or gets expelled. So he makes a plan.

 He makes all of his $N$ students stand in an line and then the $N^{\text{th}}$ student is made the leader.  The task of the leader is to propose the distribution of $M$ marks among all the students present. Then a voting is carried out and all present students ( including the leader) can vote either for or against the distribution.
- If the distribution is voted for by at least $50\%$ of the students present, then it is is approved with the leader becoming the *deciding student* and the process ends.
- Otherwise the last $K$ present students are expelled ( including the leader ). and the $(N-K)^{\text{th}}$ student is appointed as the new leader and the process is repeated.

If there are $ \leq K$ students left and the distribution is not approved, then all the present students will get expelled.

Following are the characteristics of each of the $N$ students and everyone knows about it.
- Everyone wants to maximize the marks they get or at least try not to get expelled (i.e. every student prefers getting $0$ marks over getting expelled).
- Each of them have turned into bullies ( including Phineas ) and so given a choice of getting the 
    same marks and expel more students, then they would go for it.
- If there are multiple distribution proposals maximizing the leader's marks that would be 
  accepted (voted for by atleast $50\%$ of the students) then he  will propose the 
   lexicographically smallest such distribution.       
    ( As an example: If $N = 6, M = 10$ and $(0, 0, 4, 1, 0, 5)$, $(0, 3, 0, 0, 2, 5)$ and $(2, 3, 0, 0, 0, 5)$ 
      are the possible proposals that will be accepted, and 5 is the maximum marks 
      the leader can get, then he'll propose $(0 , 0, 4, 1, 0, 5)$)
-  Each of them are brilliant logical thinkers.

Phineas is confused and wants your help to know at what position he must stand so that he will be the *deciding student* if everyone thinks optimally and what maximum marks can he get being at that position.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, three integers $N, M, K$, which are the total 
   number of students $N$, the total marks $M$, and the number of students expelled in each round of failed voting $K$.

###Output:
For each testcase, output in a single line two space separated integers $-$ the position that Phineas should stand at to be the *deciding student* and the maximum marks he can get standing at that position. 

###Constraints 
- $1 \leq T \leq 100000$
- $1 \leq N \leq 10^9$
- $1 \leq M \leq 10^9$
- $1 \leq K \leq N$

###Sample Input:
	2
	4 1 2
    5 1 1

###Sample Output:
	4 1
    4 0
	
###Explanation:
1. For the first test case the $4^{\text{th}}$ student will be the leader initially and he needs at least 2 votes to approve his distribution. As $K=2$, the $3^{\text{rd}}$ student will be expelled if the distribution is not approved and so he votes in favour of it. The $4^{\text{th}}$ student will himself vote for it and so he will be the *deciding student* anyway. So he gives himself all the marks at stake , i.e, 1 mark.

2. For the second test case the $5^{\text{th}}$ student will be expelled because he will not be able to gather at least 3 votes for any proposal. Then the $(5-1)^{\text{th}}$ student becomes the leader and distributes as follows:      
1st student-   0 marks      
2nd student-   0 marks      
3rd student-   1 marks       
4th student-   0 marks      
He will get the vote from himself and the $3^{\text{rd}}$ student which is enough to approve his distribution.
    
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>