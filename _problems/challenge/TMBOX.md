---
{"category_name":"challenge","problem_code":"TMBOX","problem_name":"The Turing Music Box","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"TEXT","40":"CLOJ","41":"FS"},"max_timelimit":17,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin"},"time":{"view_start_date":1232506141,"submit_start_date":1232506141,"visible_start_date":1232506141,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>If you've ever dealt with the theory of information, you are no doubt familiar with the theoretical notion of a <i>Turing Machine</i>. But have you ever wondered what you could do if you got a <i>real</i> Turing Machine -- one of those big metal things with all the cranks and levers and rolls of infinite tape that looks suspiciously like toilet paper?...
</p><p>
The sad answer is: there are few interesting things that can be done with such a machine. Even problems that have a little charm in the theoretical model (like the intractable Halting Problem) can be solved very efficiently with practical brute-force algorithms (see e.g. the figure at the end of the problem description). But there is one thing that you can do with a practical Turing Machine, and can't do with a theoretical one, and it is: to use it as a music box.</p><p>Our Turing Machine has exactly one state variable (an integer in the range 0 to 999) and is equipped with an infinite tape, consisting of cells with symbols from a given alphabet encoded on them. A movable read/write head is positioned over some cell of the tape, and is operated according to the list of rules encoded in the machine. The rules are of the form S1 C1 S2 C2 M, which means: if the machine is in state S1 and C1 is written in the current cell, change state to S2, write C2 in the current cell, and move the head as described by move M (one cell left, one cell right, or not at all). If no matching rule is found for the given state the machine should halt.</p><p>
Now, here is the good bit. The head makes a creaking sound when performing each rule. It goes da when moved right, di when moved left, and um when left in place. Suppose that each cell of the tape can contain one of 16 possible symbols, formed as the concatenation of exactly two of the words: da, di, um and sh for silence. Initially, nearly all the cells of the tape are filled with the symbol shsh. Only a few (not more than 500) consecutive cells form a piece of music, each cell encoding a pair of sounds (one of 9 combinations of da, di or um, without any silences). The head of the machine is initially positioned over the leftmost of the cells containing sounds.</p><p>
Now it is your task to use the Turing machine to play the piece of music written on its tape (as read from left to right, starting from the initial position of the head, as far as the first silence) as accurately as possible, using the head itself to produce the sounds required.</p><p>

<h3>Output</h3>
</p><p>The output of your program must contain a set of rules describing the behaviour of the Turing Machine designed for playing music. Each rule must be of the form S1 C1 S2 C2 M, where S1 and S2 are integers from the range 0..999, C1 and C2 belong to the 16 symbols of the alphabet, while M describes the move direction of the head by the sound it makes (da, di or um).

<h3>Score</h3>
</p><p>
Your program will be tested multiple times for different pieces of music written on the tape. The score of your program is equal to the total of non-negative scores, taken over all test cases.
</p><p>
For a test case with n notes (n/2 non-silent cells) your program will receive n-d points, where d denotes the edit distance between the music played and the music required (i.e. the minimum total number of notes that have to be inserted into or changed in both the pieces to obtain the same piece of music).

<h3>Example</h3>
</p><p>
Consider the following set of rules output by a program:
<pre>
000 dada 000 dada da
000 umda 000 dada da
000 shsh 000 shsh da
000 didi 001 didi di
001 dada 002 didi di
</pre>
</p><p>
Then the results of exemplary testing could be as follows:
<pre>
<b>Music:</b> da da|da da|da da|di di|um um
<b>Plays:</b> da da da di di
<b>Score:</b> 5

<b>Music:</b> um da|um da|um da|da um|di di
<b>Plays:</b> da da da
<b>Score:</b> 3

<b>Total:</b> 5 + 3 = 8 points
</pre>

</p><p><i>Bonus info:</i> There are no more than 100 tests. The score format is <i>s.xxyy</i>, where <i>xx</i> denotes the number of tests for which your machine played the music perfectly, <i>yy</i> - the number of tests for which it received a positive score.
</p><p>
<img src="http://www.codechef.com/download/adrian_halting.png" img /></p>