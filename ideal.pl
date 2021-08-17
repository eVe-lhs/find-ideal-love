perApp(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
perApp(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.

hapWea(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
hapWea(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
important(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
important(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
headHeart(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
headHeart(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
precendence(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
precendence(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
ideal(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
ideal(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
problem(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
problem(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
inspire(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
inspire(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
alone(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
alone(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
thing(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
thing(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
food1(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
food1(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
food2(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
food2(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.
hate(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
hate(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.

sociability(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
sociability(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.

angry(X,A,B,A1,B):-
	X=1,
	A1 is A+1,!.
angry(X,A,B,A,B1):-
	X=2,
	B1 is B + 1.

max([X],X).
max([X|T],X):-
    max(T,Y),
    X>Y,!.
max([_|T],Z):-
    max(T,Z).

pos(X,[X|_], Len, Len):- !.

pos(X,[_H| T], LE, LF) :-
  L1 is LE + 1,
  pos(X,T, L1, LF).

verifier-male(N,'Yanant'):-
N=0,!.
verifier-male(N,'PanKhin'):-
N=1,!.
verifier-male(N,'Shwe Sin'):-
N=2,!.
verifier-male(N,'Kaung Kaung'):-
N=3,!.
verifier-male(N,'Garu'):-
N=4,!.
verifier-male(N,'Hnin'):-
N=5.
type-male(Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15):-
    A1 is 0,
    B1 is 0,
    C1 is 0,
    D1 is 0,
    E1 is 0,
    F1 is 0,
perApp(Q1,A1,C1,A2,C2),
hapWea(Q2,D1,F1,D2,F2),
important(Q3,D2,E1,D3,E2),
headHeart(Q4,A2,B1,A3,B2),
precendence(Q5,C2,F2,C3,F3),
ideal(Q6,B2,E2,B3,E3),
problem(Q7,A3,D3,A4,D4),
inspire(Q8,B3,C3,B4,C4),
alone(Q9,E3,F3,E4,F4),
thing(Q10,A4,E4,A5,E5),
food1(Q11,B4,D4,B5,D5),
food2(Q12,F4,A5,F5,A6),
hate(Q13,B5,F5,B6,F6),
sociability(Q14,C4,E5,C5,E6),
angry(Q15,D5,C5,D6,C6),
max([A6,B6,C6,D6,E6,F6],R),
pos(R,[A6,B6,C6,D6,E6,F6],0,N),
verifier-male(N,Type),
write(Type).

verifier-female(N,'Ko Sai'):-
N=0,!.
verifier-female(N,'Htet Htet'):-
N=1,!.
verifier-female(N,'Lin Lin'):-
N=2,!.
verifier-female(N,'Ko Paing'):-
N=3,!.
verifier-female(N,'Ko Misoo'):-
N=4,!.
verifier-female(N,'Kaung Set'):-
N=5.
type-female(Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15):-
    A1 is 0,
    B1 is 0,
    C1 is 0,
    D1 is 0,
    E1 is 0,
    F1 is 0,
perApp(Q1,A1,C1,A2,C2),
hapWea(Q2,D1,F1,D2,F2),
important(Q3,D2,E1,D3,E2),
headHeart(Q4,A2,B1,A3,B2),
precendence(Q5,C2,F2,C3,F3),
ideal(Q6,B2,E2,B3,E3),
problem(Q7,A3,D3,A4,D4),
inspire(Q8,B3,C3,B4,C4),
alone(Q9,E3,F3,E4,F4),
thing(Q10,A4,E4,A5,E5),
food1(Q11,B4,D4,B5,D5),
food2(Q12,F4,A5,F5,A6),
hate(Q13,B5,F5,B6,F6),
sociability(Q14,C4,E5,C5,E6),
angry(Q15,D5,C5,D6,C6),
max([A6,B6,C6,D6,E6,F6],R),
pos(R,[A6,B6,C6,D6,E6,F6],0,N),
verifier-female(N,Type),
write(Type).


'lin and Yanant'.
